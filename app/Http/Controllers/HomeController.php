<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Hotels;
use App\Models\User;
use App\Models\HotelRooms;
use App\Models\Booking;
use App\Models\Options;
use Carbon\Carbon;
use Session;
use DB;
use Auth;

class HomeController extends Controller
{



    protected $requestdata;

    public function index()
    {
        $exclusive = DB::table('Hotels')
            ->join('HotelRooms', 'Hotels.id', '=', 'HotelRooms.hotelId')
            ->orderBy('HotelRooms.discount', 'ASC')
            ->limit(6)->get([
                'Hotels.id',
                'Hotels.hotelName',
                'Hotels.address',
                'Hotels.avgRating',
                'Hotels.telephone',
                'HotelRooms.guestCapacity',
                'HotelRooms.hour12Price',
                'HotelRooms.hour24Price',
                'HotelRooms.breakfast_available',
            ]);

        // dd($exclusive);
        return view('user.index', compact('exclusive'));
    }

    public function getHotelData(Request $request)
    {

        if ($request->ajax()) {
            $query = $request->input('query');
            $suggestions = DB::table('Hotels')
                ->where('is_approved', 'Approved')
                ->where('is_deleted', 0)
                ->where('is_approved', 'Approved')
                ->where('hotelName', 'LIKE', "%{$query}%")
                ->orWhere('address', 'LIKE', "%{$query}%")
                // ->orWhere('city_Name', 'LIKE', "%{$query}%")
                ->limit(9)->get()->toArray();



            // dd($suggestions);

            if ($suggestions) {

                // dd(gettype($suggestions));
                $latitude = $suggestions[0]->lat;
                $longitude = $suggestions[0]->log;

                // dd($longitude);

                $newsuggestions = DB::table("Hotels")
                    ->select(
                        "hotelName",
                        "address",
                        "city_Name",
                        DB::raw("55555 * acos(cos(radians(" . $latitude . "))
                        * cos(radians(Hotels.lat))
                        * cos(radians(Hotels.log) - radians(" . $longitude . "))
                        + sin(radians(" . $latitude . "))
                        * sin(radians(Hotels.lat))) AS distance")
                    )
                    ->where('is_deleted', 0)
                    ->where('is_approved', 'Approved')
                    ->orderBy('distance')
                    ->limit(9)
                    ->get();

                // dd($newsuggestions);

            }


            // dd($newsuggestions);



            $output = '';
            if (count($newsuggestions) > 0) {

                $output = '<ul class="list-group" style="display:clock;position:relative;z-index:1">';
                foreach ($newsuggestions as $row) {
                    $output .= '<li class="list-group-item">' . $row->hotelName . '</li>';
                    $output .= '<li class="list-group-item">' . $row->address . '</li>';
                }
                $output .= '</ul>';
            } else {
                $output .= '<li class="list-group-item" style="color:red;"> No Data Found</li>';
            }
            echo $output;
        }
    }

    public function HotelSearch(Request $request)
    {

        $SearchName = $request->search;
        $guest_num = $request->total_guest;
        $checkIn = $request->strtdate;
        $checkOut = $request->enddate;
        $request->session()->put('requestdata', $request->all());

        $requestAll = $request->all();
        // dd($requestAll);

        if ($request->search != '') {
            // dd($request->search);
            $datas = DB::table('Hotels')
                ->where('Hotels.is_deleted', 0)
                ->where('Hotels.status', 1)
                ->where(function ($query) use ($SearchName) {
                    $query->where('Hotels.hotelName', 'LIKE', "%{$SearchName}%")
                        ->orWhere('Hotels.address', 'LIKE', "%{$SearchName}%")
                        // ->orWhere('Hotels.city_Name', "%{$SearchName}%")
                    ;
                })
                ->groupBy('Hotels.id')->simplePaginate(5);

                if (count($datas) > 0) {
                    $hotelIds = $datas->pluck('id')->toArray();
                    // dd($hotelIds);

                $hotels = DB::table('Hotels')
                    ->join('HotelImages', 'HotelImages.hotelId', '=', 'Hotels.id')
                    // ->join('Ratings', 'Ratings.hotelId', '=', 'Hotels.id')
                    ->whereIn('Hotels.id', $hotelIds)
                    ->whereIn('HotelImages.hotelId', $hotelIds)
                    // ->whereIn('Ratings.hotelId', $hotelIds)
                    ->groupBy('Hotels.id')->get();

                    // dd($hotels);


                $request->session()->put('hotelIds', $hotelIds);
                $h_Id = implode(',', $hotelIds);
                $request->session()->put('rooms', $hotels);
                if (count($hotels) > 0) {
                    return view('Hotels.hoteldetails', compact('datas', 'hotels', 'requestAll'));
                   
                } else {
                    return back()->with('error', "Sorry, This Hotel's At this places Are Not available!");
                }
            } else {
                return back()->with('error', ' Sorry, This Hotel Is Not available');
            }
        } else {
            return back()->with('error', 'Please input something');
        }
    }

    

    public function BookRooms(request $request, $id){

        $bookRums = DB::table('HotelRooms')
            ->Join('HotelRoomComplementaries', 'HotelRoomComplementaries.roomId', '=', 'HotelRooms.id')
            ->Join('HotelRoomImages', 'HotelRoomImages.roomId', '=', 'HotelRooms.id')
            ->Join('HotelAmenities', 'HotelAmenities.id', '=', 'HotelRoomComplementaries.amenityId')
            ->where('HotelRooms.id', $id)
            ->where('HotelRoomImages.roomId', $id)
            ->select(
                'HotelRooms.id as room_id',
                'HotelRooms.*',
                'HotelAmenities.type',
                'HotelAmenities.name',
                'HotelRoomImages.fileName as roomImage',
                'HotelRoomComplementaries.amenityId as facilityId'
            )->first();
        // dd($bookRums);
        $request->session()->put('bookRums', $bookRums);
        $fid = DB::table('HotelRoomComplementaries')
            ->where('HotelRoomComplementaries.roomId', $id)->get();
        $fids = $fid->pluck('amenityId');
        $amenities = DB::table('HotelAmenities')
            ->wherein('id', $fids)
            ->select('name')
            ->groupBy('type')
            ->get();
        //  dd($bookRums);


        $hotelIds = $bookRums->hotelId;
        $HotelRoomsData = $request->session()->get('roomData');
        $hotel = DB::table('Hotels')->where('id', $hotelIds)->select('hotelName', 'address', 'city_Name')->first();



        
        //   return view('user.Booking', compact('hotel', 'requestData', 'fac', 'Type', 'id', 'amenities'));  
        return view('Hotels.Booking', compact('hotel', 'bookRums', 'amenities'));
    }



    public function ConfirmBooking(request $request, $id){


        $userId = Auth::user()->id;
        $username = Auth::user()->fullName;
        $requestData = $request->session()->get('requestdata');
        $endDate = Carbon::parse($requestData['enddate']);
        $startDate = Carbon::parse($requestData['strtdate']);
        $totalDays = $endDate->diffInDays($startDate); 

        $bookRums = DB::table('HotelRooms')
            ->Join('HotelRoomComplementaries', 'HotelRoomComplementaries.roomId', '=', 'HotelRooms.id')
            ->Join('HotelRoomImages', 'HotelRoomImages.roomId', '=', 'HotelRooms.id')
            ->Join('HotelAmenities', 'HotelAmenities.id', '=', 'HotelRoomComplementaries.amenityId')
            ->where('HotelRooms.id', $id)
            ->where('HotelRoomImages.roomId', $id)
            ->select(
                'HotelRooms.id as room_id',
                'HotelRooms.*',
                'HotelAmenities.type',
                'HotelAmenities.name',
                'HotelRoomImages.fileName as roomImage',
                'HotelRoomComplementaries.amenityId as facilityId'
            )->first();
        // dd($bookRums);
        $discountedprice = $bookRums->hour24Price - ($bookRums->hour24Price * $bookRums->discount / 100);
        if ($bookRums->applyDiscount == 1) {
            if ($bookRums->breakfast_available == 1) {
                $finalP =  $discountedprice + $bookRums->breakfast_price;
            } else {
                $finalP = $discountedprice;
            }
        }

        return view('user.AfterBooking', compact('requestData', 'bookRums', 'totalDays', 'username'));
    }

        

    public function SendMail(request $request){      

        $id = $request->roomId;
        // dd($id);
        // $discount = $request->discount;
        // $totalprice = $request->totalprice;
        $userId = Auth::user()->id;
        $numb = $request->cnumb;
        $requestData = $request->session()->get('requestdata');
        $endDate = Carbon::parse($requestData['enddate']);
        $startDate = Carbon::parse($requestData['strtdate']);
        $totalDays = $endDate->diffInDays($startDate);
        $rooms = $requestData['roomcounttt'];
        $checkin =  $requestData['strtdate'];
        $checkout =  $requestData['enddate'];
        $guest = $requestData['total_guest'];

        // if(( count$rooms) > 1){
        //     $HotelandRooms = DB::table('HotelRooms')->join('Hotels', 'Hotels.id', '=', 'HotelRooms.hotelId')
        //     ->where('HotelRooms.id', $id)->select('Hotels.address', 'Hotels.hotelName','Hotels.telephone', 'HotelRooms.*')->first();
        //     $owenerID = $HotelandRooms->userId; $hotelID = $HotelandRooms->hotelId;

        //     $otherRoom = DB::table('HotelRooms')
        //     ->where('hotelId', $hotelID)
        //     ->where('id', '!=', $id)
        //     ->min('id');
        //      }else{
            // dd($id);
        $HotelandRooms =  DB::table('HotelRooms')
            ->Join('HotelRoomComplementaries', 'HotelRoomComplementaries.roomId', '=', 'HotelRooms.id')
            ->Join('Hotels', 'Hotels.id', '=', 'HotelRooms.hotelId')
            ->Join('HotelRoomImages', 'HotelRoomImages.roomId', '=', 'HotelRooms.id')
            ->Join('HotelAmenities', 'HotelAmenities.id', '=', 'HotelRoomComplementaries.amenityId')
            ->where('HotelRooms.id', $id)->where('HotelRoomImages.roomId', $id)
            ->select(
                'HotelRooms.*',
                'HotelRooms.id as room_id',
                'Hotels.telephone',
                'Hotels.hotelName',
                'Hotels.hotelEmail',
                'Hotels.address',
                'HotelAmenities.type',
                'HotelAmenities.name',
                'HotelRoomImages.fileName as roomImage',
                'HotelRoomComplementaries.amenityId as facilityId'
            )->first();
        $owenerID = $HotelandRooms->userId;
        $hotelID = $HotelandRooms->hotelId;
        $roomTypeId = $HotelandRooms->roomTypeId;
        $roomType =  DB::table('Options')->where('id', $roomTypeId)->value('name');
       

        // }                            
        // $ownerEmail = User:: where('id', $owenerID)->value('email');

        $Reservation = random_int(1000000000, 9999999999);
        $user = User::where('id', $userId)->first();
        $name = $user->fullName;
        $userEmail = $user->email;
        $usernumb = $user->mobile;
        $passcode = random_int(100000, 999999);
        // dd($user);
        $ownerEmail = "mannurawot890@gmail.com";

        $bfp = $HotelandRooms->breakfast_price;
        $bfa = $HotelandRooms->breakfast_available; // $city = $HotelandRooms->city_Name;
        $tele = $HotelandRooms->telephone;
        $hname = $HotelandRooms->hotelName;
        $ehotel = $HotelandRooms->hotelEmail;
        $add = $HotelandRooms->address;
        $price = $HotelandRooms->hour24Price * $totalDays * $rooms;
        $image = $HotelandRooms->roomImage;

        if ($HotelandRooms->applyDiscount == 1) {

            $discountedprice = $price - ($HotelandRooms->hour24Price * $totalDays * $HotelandRooms->discount / 100);
            if ($HotelandRooms->breakfast_available == 1) {
                $finalP =  $discountedprice + $HotelandRooms->breakfast_price;
                $hello = 1;
            } else {
                $finalP = $discountedprice;
                $hello = 0;
            }
        }

        $mailData = [
            "name" => $name, "checkout" => $checkout, "rooms" => $rooms, "tele" => $tele, "Reservation" => $Reservation, "roomId" => $id,
            "number" => $numb, "checkin" => $checkin, "bfp" => $bfp, "cname" => $ownerEmail, "hname" => $HotelandRooms->hotelName, //"city" => $city, 
            "add" => $HotelandRooms->address, "guest" => $guest, "hotelmail" => $ehotel, "roomtype" => $roomType, "roomPrice" => $price,
            "discount" => $request->discount, "roomAmount" => $HotelandRooms->hour24Price, "passcode" => $passcode, 'roomImage' => $image,
            "totalprice" => $finalP, "days" => $totalDays, "discountedprice" => $discountedprice, "usernumb" => $usernumb, "useremail" => $userEmail
        ];

        $MailSend =  Mail::send('user.Email.CustomerEmail', $mailData, function ($message) use ($request, $userEmail) {
            $message->subject('Booking Confirm!!!');
            $message->to($userEmail);
        });          

        if ($MailSend) {
            Mail::send('user.Email.EmailOwner', $mailData, function ($message) use ($request, $ownerEmail) {
                $message->subject('You have a booking!!!');
                $message->to($ownerEmail);
            });


            $today = now()->toDateString();
            $bookingDate = \Carbon\Carbon::parse($checkin)->format('d M, Y');
            $bookingTillDate = \Carbon\Carbon::parse($checkout)->format('d M, Y');
            $checkIN = \Carbon\Carbon::parse($HotelandRooms->checkIn)->format('h:i A');
            $checkOUT = \Carbon\Carbon::parse($HotelandRooms->checkOut)->format('h:i A');

           

            $insert = DB::table('Bookings')->insert([
                'userId' => $userId,
                'roomId' => $id,
                'hotelId' => $hotelID,
                'bookingDate' => $today,
                'bookingFromDate' => $bookingDate,
                'bookingToDate' => $bookingTillDate,
                'checkinTime' => $checkIN,
                'checkOutTime' => $checkOUT,
                'reservation_no' => $Reservation,
                'is_paid' => 'no',
                'price' => $finalP,
                'isBreakfastIncludes' => $hello,
                'roomPrice' => $HotelandRooms->hour24Price,
                'numberOfDays' => $totalDays,
                'roomQuantity' => $rooms,
                'total_guest' => $guest,
                'confirmation_code' => $passcode,
                'discountValue' => $HotelandRooms->discount,
            ]);
        }


        return redirect()->route('index')->with('success', "Please check your mails.");
    }



    public function DoneBook(request $request)
    {

        $userId = Auth::user()->id;
        $user = User::where('id', $userId) - first();
        $insert = Booking::insert([
            'userId' => $userId,
            'roomId' => $userId,
            'hotelId' => $userId,
            'numberOfDays' => $userId,
            'checkin_date' => $userId,
            'checkinTime' => $userId,
            'is_paid' => 'yes',
            'roomPrice' => $request->price,
        ]);

        return redirect()->route('DoneBook')->with('success', 'hotel booked');
    }

    public function exclusive($id, request $request)
    {        

        $hotels = DB::table('HotelRooms')
            ->Join('HotelRoomComplementaries', 'HotelRoomComplementaries.roomId', '=', 'HotelRooms.id')
            ->Join('HotelRoomImages', 'HotelRoomImages.roomId', '=', 'HotelRooms.id')
            ->Join('HotelAmenities', 'HotelAmenities.id', '=', 'HotelRoomComplementaries.amenityId')
            ->join('Hotels', 'Hotels.id', '=', 'HotelRooms.hotelId')
            ->where('Hotels.id', $id)
            ->select(
                'HotelRooms.id as room_id',
                'HotelRooms.*',
                'HotelAmenities.type',
                'HotelAmenities.name',
                'HotelRoomImages.fileName as roomImage',
                'HotelRoomComplementaries.amenityId as facilityId'
            )->first();

    }
}
