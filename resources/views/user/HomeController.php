<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Hotels;
use App\Models\HotelRooms;
use App\Models\Booking;
use App\Models\options;
use DB;
use Auth;

class HomeController extends Controller
{
    public function getHotelData(Request $request) {
       
            // dd($request->all());
        if ($request->ajax()) {
            $query = $request->input('query');
            $suggestions = DB::table('hotels')
            // ->where('is_approved', 'Approved')
            ->where('is_deleted', 0)
            ->where('is_approved', 'Approved')
            ->where('hotelName', 'LIKE', "%{$query}%")
            ->orWhere('address', 'LIKE', "%{$query}%")
            ->orWhere('city_Name', 'LIKE', "%{$query}%")
            ->limit(9)->get();

            $output = '';
            if (count($suggestions) > 0) {

                $output = '<ul class="list-group" style="display:clock;position:relative;z-index:1">';
                foreach ($suggestions as $row){
                    $output .= '<li class="list-group-item">' . $row->hotelName . '</li>';
                }
                $output .= '</ul>';
            } else {
                $output .= '<li class="list-group-item"> No Data Found</li>';
            }
            echo $output;
        }


        // return view('user.hoteldetails');
    }

     public function HotelSearch(request $request){  
        
        // dd($request->all());
         $SearchName = $request->search; 
         $StartDate = $request->strtdate; 
         $EndDate = $request->enddate; 
         $guest_num = $request->total_guest; 

         if($request->search != ''){                   
                        $data = DB::table('hotels')
                        ->where('is_deleted', 0)
                        ->where('is_approved', 'Approved')
                        ->where('hotelName', $SearchName)
                        ->orWhere('address', $SearchName)
                        ->orWhere('city_Name', $SearchName)
                        ->get()->toArray(); 
                    
                    // dd($data);                    
                    return view('user.hoteldetails2', compact('data'));                    
                }else{
                    return back()->with('fail', 'please input something');                    
                }                  
        

     }

     public function DetailedHotel($id){      
                if($id != ''){
                $data = DB::table('hotelrooms')->where('hotelId',$id)->get()->toArray();  
                // $data = DB::table('hotelrooms')
                // ->join('hotelroomcomplementaries','hotelrooms.id', '=', 'hotelroomcomplementaries.roomId' )               
                // ->join('hotelamenities','hotelamenities.id', '=', 'hotelroomcomplementaries.amenityId' )  
                // ->join('options','hotelrooms.roomTypeId', '=', 'options.id' )             
                // ->join('hotels','hotels.id', '=', 'hotelrooms.hotelId' )             
                // ->where('hotelrooms.hotelId',$id)->get()->toArray();   
                // dd($data); 
                $hotels = Hotels::where('id', $id)->get();
                // dd($hotels);
                return view('user.Hoteldetailsnew', compact('data', 'hotels'));                         
               }else{
                   return back();
               }  
            }

     public function BookHotel($id){
        $hotel = DB::table('hotels')
            ->join('hotelrooms', 'hotels.id', '=', 'hotelrooms.hotelId')
            ->where('hotels.id', $id )
              		->first(['hotels.id',                          
                        'hotels.hotelName', 
                      'hotels.address',
                      'hotels.city_Name',
                      'hotels.avgRating',
                      'hotels.telephone',
                      'hotelrooms.guestCapacity',
                      'hotelrooms.hour12Price',
                      'hotelrooms.breakfast_available', 
                    ]);  
                    // dd($hotel);
               
      return view('user.Booking', compact('hotel'));  
     }

     public function addToWishlist(Request $request){
        $response = addProduct($request, 'wishlist');
        return response()->json([
            'success'   =>  $response
        ]);
    }

     public function ConfirmBooking(request $request){        
        $userId = Auth::user()->id;    
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
     public function DoneBook(request $request){
        
        $userId = Auth::user()->id;      

        $user = User::where('id', $userId)-first();

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

     public function index(){
        $exclusive = DB::table('hotels')
        ->join('hotelrooms', 'hotels.id', '=', 'hotelrooms.hotelId')
        ->orderBy('hotelrooms.discount', 'ASC')
                  ->limit(6)->get(['hotels.id',                          
                    'hotels.hotelName', 
                  'hotels.address',
                  'hotels.city_Name',
                  'hotels.avgRating',
                  'hotels.telephone',
                  'hotelrooms.guestCapacity',
                  'hotelrooms.hour12Price',
                  'hotelrooms.hour24Price',
                  'hotelrooms.breakfast_available', 
                ]);  
    
                // dd($exclusive);
                return view('user.index', compact('exclusive'));
     }
      
}




       	

       

       


