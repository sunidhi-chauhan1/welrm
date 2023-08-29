<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Hotels;
use App\Models\HotelRooms;
use App\Models\Booking;
use App\Models\options;
use Carbon\Carbon;
use Session;
use DB;
use Auth;

class HotelsController extends Controller{

    public function index(){        
        $hotelsLists = DB::table('Hotels')
        ->join('HotelImages', 'HotelImages.hotelId', '=', 'Hotels.id')
        ->select('Hotels.*' ,'HotelImages.fileName')->where('is_approved', 'approved')
        ->Paginate(9); 
        $cities = DB::table('Hotels')->select('city_name')->where('city_name','!=', '')->groupby('city_name')->get();

        // dd('stop that');
        return view('Hotels.hotelchain', compact('hotelsLists', 'cities'));
    }

    public function cities(request $request){
        $c = $request->cityName;
        // dd($c);
           
        $cities = DB::table('Hotels')->select('city_name')->where('city_name','!=', '')->get();
        // dd($cities);
        $hotelsLists = DB::table('Hotels')
        ->join('HotelImages', 'HotelImages.hotelId', '=', 'Hotels.id')
        ->select('Hotels.*' ,'HotelImages.fileName')->where('is_approved', 'approved')->where('city_name', $c)
        ->groupby('Hotels.id')->Paginate(9); //dd($hotelsLists);
        
        $cities = DB::table('Hotels')->select('city_name')->where('city_name','!=', '')->groupby('city_name')->get();
        
        return view('Hotels.hotelchain', compact('hotelsLists' , 'cities'));
    }

    public function hotelsDetails(request $request, $id){

        $hotels = DB::table('Hotels')->where('id', $id)->first();
        $rid = DB::table('HotelRooms')->where('hotelId', $id)->get();
        $roomsId = $rid->pluck('id');
        // dd($roomsId);
        
       
        $roomData = DB::table('HotelRooms')
        ->join('Hotels', 'Hotels.id', '=', 'HotelRooms.hotelId') 
        ->Join('HotelRoomComplementaries', 'HotelRoomComplementaries.roomId', '=', 'HotelRooms.id')
        ->Join('HotelRoomImages', 'HotelRoomImages.roomId', '=', 'HotelRooms.id')                                    
        ->join('Options', 'HotelRooms.roomTypeId', '=', 'Options.id')
        ->Join('HotelAmenities', 'HotelAmenities.id', '=', 'HotelRoomComplementaries.amenityId') 
        ->whereIn('HotelRooms.id', $roomsId)
        ->whereIn('HotelRoomImages.roomId', $roomsId)
        ->whereIn('HotelRoomComplementaries.roomId', $roomsId)
        ->where('HotelRooms.status', 1)
        ->select('HotelRooms.id as room_id',
        'HotelRooms.*', 'HotelAmenities.type', 'HotelAmenities.name',
        'Hotels.hotelName','Hotels.address',
        'Options.name as roomTypeName','Options.group',
        'Hotels.telephone','Hotels.price_started',
        'HotelRoomImages.fileName as roomImage', 
        'HotelRoomComplementaries.amenityId as facilityId')
        ->groupBy('HotelRooms.id')->get();   //dd($roomData);
        $fid = DB::table('HotelRoomComplementaries')
        ->whereIn('HotelRoomComplementaries.roomId', $roomsId)->get();   
        // dd($fid);                                                 
        $fids = $fid->pluck('amenityId');
        $amenities = DB::table('HotelAmenities')
                        ->wherein('id', $fids)
                        ->select('name')
                        ->groupBy('type')
                        ->get();

                        

        return view('Hotels.Hoteldetailsnew2', compact('roomData', 'hotels', 'amenities'));

    }

   
   
      
}




       	

       

       


