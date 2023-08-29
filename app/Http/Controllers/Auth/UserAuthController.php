<?php

namespace App\Http\Controllers\Auth;


use App\Mail\SendEmails;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Socialite;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\DB;

class UserAuthController extends Controller
{
    public function signup(Request $request){
        $request->validate([
            'fullName'     => 'required|string|max:255',
            'mobile'       => 'required|string|max:255',
            'email'        => 'required|string|email|unique:users|max:255',
            'password'     => 'required|string|min:8|confirmed',
        ]);

        $users =  User::create([
            'fullName' => $request->fullName,
            'mobile'   => $request->mobile,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'createdAt' => now(),
            'updatedAt' => now()
        ]);

        session()->put('signup', "success");
        return redirect()->back()->with('success', 'Registration successful. You can now log in.');
        // return redirect()->route('index')->with('success', 'Registration successful. You can now log in.');
    }


    public function redirectToGoogleDevs(Request $request){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request){
        try {
            $user = Socialite::driver('google')->stateless()->user();  

                   
            $finduser = User::where('email', $user->email)
            ->where('password', NULL)
            // ->where('google_id', $user->id)
            ->first();
                        if ($finduser){
                            Auth::loginUsingId($finduser->id);
                            return redirect('/')->with('success', "Logged in successfully.");
                            
                        }else {
                            $insert = User::create([
                                'fullName' => $user->name,
                                'profileImage' => $user->avatar,
                                'email' => $user->email,
                                'google_id' => 'G-'.$user->id,
                                'createdAt' => now(),
                                'updatedAt' => now() ]);
                                $id = DB::getPdo()->lastInsertId();   
                            Auth::loginUsingId($id);
                         return redirect()->back()->with('success', "SignedUp successfully.");
                        }
        } catch (Exception $e) {
            echo"<h1>Something went wrong while login with your social account.Please try to open link again.</h1>";
        }
    }

    public function redirectToFacebook(Request $request){        
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback(){        
        $user = Socialite::driver('facebook')->user();
        // dd($user);
        $existingUser = User::where('email', $user->email)
            ->where('password', NULL)
            ->where('facebook_id', $user->id)
            ->first();
        if ($existingUser) {
            auth()->login($existingUser);
            return redirect('/')->with('success', "Logged in successfully."); 
        $newUser = User::create([
            'fullName' => $user->name,
            'email' => $user->email, 
            'createdAt' => now(),
            'updatedAt' => now()
        ]);

        auth()->login($newUser);
        return redirect()->back()->with('success', "Logged in successfully."); 
    }}


    public function logout(Request $request) {
        // dd('hello ch');
        Auth::logout();
        return redirect()->route('index')->with('error', "Logged out");
      }

   

    public function login(Request $request){
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',

        ]);




        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            session()->forget(['signup', 'signup']);

            return redirect()->back()->with('success', "Logged in successfully. ");
        } else {
            session()->put('login-error', 'error');
        }
        return back()->with('error', 'Invalid credentials.');
    }

    public function phoneLogin(Request $request){

        // dd('hello ji');
        $request->validate([ 'mobile'    => 'required|numeric|digits:10',
        'password' => 'required',]);

        $credentials = $request->only('mobile', 'password');
        if (Auth::attempt($credentials)) {
            session()->forget(['login-error', 'phone-login']);
            return redirect()->route('index')->with('success', "Logged in successfully. ");
        } else {

            $mobile = $request->mobile;
            $password = $request->name;
            
            $users =  User::where('mobile', $mobile)->first();
            // dd($users);
            if($users){
                $pass =  Hash::check($request->input('password'), $users->password);
                if($pass == false){
                    return back()->with('error', 'Invalid credentials.'); 

                }
                          
            }elseif(($users) == null){

                    $otp = rand(100000, 999999);
                    $verification =DB::table('Verification')
                                    ->insert(['mobile' => $mobile, 'otp' => $otp, 'expire_at' => now()->addMinutes(5),]);                                                                                   
                    $receiverNumber = $request->num;
                    $message = "this messege is from Welrm, your otp is:- .$otp";
       
        try{
                $sid = "ACe1ee06303e5c81f40e79cc7dc5768232"; 
                $token = "0d08caba0a99e8d75adba50e43993095"; 
                $client = new Twilio\Rest\Client($sid, $token);
               
                $send_sms = $client->messages->create(
                    $mobile,['from' => '+19563045423','body' => "Hey! Your Welrm Login OTP is. $otp"]
                );                
                // echo 1;
                dd($send_sms);    
                 $this->verifyOtp($otp);  
            }catch(Exception $e){
                dd($e);
            }            
            
            
        }else{

            return back()->with('error', 'Something Went Wrong');
        }
    } 
}
    
    protected function verifyOtp(Request $request){

            $new = session()->get('opt');
        // dd($new);

        // if( $otp == ){
        //     $users =  User::create([
        //         'mobile'   => $request->mobile, 'password' => Hash::make($request->password), 'createdAt' => now(),'updatedAt' => now()  ]);
        //     }else{

        //     }                             

        // }
        return back()->with(['phone_number' => $data['phone_number'], 'error' => 'Invalid verification code entered!']);
    }


    public function UsersBooking(){

        // dd(Auth::user()->id);
        $me = DB::table('users')->where('id', Auth::user()->id)->first();
        
        $users = DB::table('Bookings')
                    ->join('Hotels', 'Hotels.id', '=', 'Bookings.hotelId')
                    ->join('HotelRooms', 'HotelRooms.id', '=', 'Bookings.roomId')
                    ->join('Options', 'Options.id', '=', 'HotelRooms.roomTypeId') 
                    ->select('Hotels.HotelName', 'Hotels.address', 'Bookings.*', 
                            'Bookings.roomId as bookedroomId', 
                            'HotelRooms.roomTypeId', 'Options.name')
                    ->where('Bookings.userId', Auth::user()->id)
                    ->where('Bookings.status', '!=', 'cancelled')
                    ->where('Bookings.status', '!=', 'checkout')
                    ->groupBy('Bookings.reservation_no')
                    ->simplePaginate(6);

        $completed = DB::table('Bookings')
                    ->join('Hotels', 'Hotels.id', '=', 'Bookings.hotelId')
                    ->join('HotelRooms', 'HotelRooms.id', '=', 'Bookings.roomId')
                    ->join('Options', 'Options.id', '=', 'HotelRooms.roomTypeId') 
                    ->select('Hotels.HotelName', 'Hotels.address', 'Bookings.*', 
                            'Bookings.roomId as bookedroomId', 
                            'HotelRooms.roomTypeId', 'Options.name')
                    ->where('Bookings.userId', Auth::user()->id)
                    ->where('Bookings.status', '=', 'checkout')
                    ->groupBy('Bookings.reservation_no')
                    ->simplePaginate(6);
                    // dd($completed);


        $cancels = DB::table('Bookings')
                    ->join('Hotels', 'Hotels.id', '=', 'Bookings.hotelId')
                    ->join('HotelRooms', 'HotelRooms.id', '=', 'Bookings.roomId')
                    ->join('Options', 'Options.id', '=', 'HotelRooms.roomTypeId') 
                    ->select('Hotels.HotelName', 'Hotels.address', 'Bookings.*', 
                            'Bookings.roomId as bookedroomId', 'HotelRooms.roomTypeId', 'Options.name')                            
                    ->where('Bookings.userId', Auth::user()->id)
                    ->where('Bookings.status', '=', 'cancelled')
                    ->groupBy('Bookings.reservation_no')->simplePaginate(6);
                    
        // $cancleBY = DB::table('users')
        //                 ->where('id', )
        return view('user/Bookingcan', compact('users','me', 'cancels', 'completed'));
    }

    public function CancleBooking($id, request $request){
        $cancle = $request->all();
        $Date = \Carbon\Carbon::now()->tz('Asia/Kolkata');;
        $cancledate = $Date->format('M d, Y');
        $cancledate = $Date->format('d M Y h:i A');
       
        $user = Auth::user()->id;
               
       $CancleDone = DB::table('Bookings')
            ->where('reservation_no', $cancle['number'])
            ->update([
                'Bookings.userId' => $user,
                'Bookings.status' => 'cancelled',
                'Bookings.cancelled_by' => 'user',
                'Bookings.cancelation_reason' => $cancle['reason'],
                'Bookings.cancelation_date' => $cancledate,
            ]);

            if($CancleDone){
                return back()->with(['success' => 'Booking Cancled']);
            }else{
                return back()->with(['error' => 'somthing Went Wrong, try again sometime']);
            }

    }
   

    public function addToWishlist(Request $request, $id){
    $wishlisted = DB::table('WishLists')->where('userId', Auth::user()->id)->where('roomId', $id)->first();   
    // dd($wishlisted);

    if(($wishlisted) != ''){ 
        $removed = DB::table('WishLists')->where('id', $wishlisted->id)->delete();
        if($removed){ return back()->with(['error' => 'Removed From Your Wishlist']);}        
    }else{
        $wishlist =  DB::table('WishLists')->insert(['userId' => Auth::user()->id,'roomId' => $id,]);
        return back()->with(['success' => 'Added To Your Wishlist']); }                       
    }

    public function ShowWishlist(Request $request){
        $user = Auth::user()->id;
        // dd($user);
        $wishlists = 
        DB::table('WishLists')
        ->join('HotelRooms', 'HotelRooms.id', '=', 'WishLists.roomId')
        // ->join('Hotels', 'HotelRooms.id', '=', 'WishLists.roomId')
        ->join('HotelRoomImages', 'HotelRoomImages.roomId', '=', 'WishLists.roomId')
        ->where('WishLists.userId', $user)
        ->groupBy('WishLists.roomId')->get()->toArray();
        // dd(gettype($WishLists)); 
        // dd(($wishlists));    
        return view('user.Wishlist', compact('wishlists'));
    }

    public function removeList($id){
        // dd('mannu');
        $user = Auth::user()->id;
        $removed = DB::table('WishLists')
        ->where('roomId',$id)
        ->where('userId',$user)
        ->delete();
        if($removed){
            return back()->with(['error' => 'Removed From Your Wishlist']);

        }

    }

    

    
}
