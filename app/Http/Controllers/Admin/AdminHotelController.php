<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;


class AdminHotelController extends Controller
{
    public function HotelRoom(){

        $roomData = DB::table('HotelRooms')
        ->join('Hotels', 'Hotels.id', '=', 'HotelRooms.hotelId') 
        ->Join('HotelRoomComplementaries', 'HotelRoomComplementaries.roomId', '=', 'HotelRooms.id')
        ->Join('HotelRoomImages', 'HotelRoomImages.roomId', '=', 'HotelRooms.id')                                    
        ->join('Options', 'HotelRooms.roomTypeId', '=', 'Options.id')
        ->Join('HotelAmenities', 'HotelAmenities.id', '=', 'HotelRoomComplementaries.amenityId') 
        // ->whereIn('HotelRooms.id', $roomsId)
        // ->whereIn('HotelRoomImages.roomId', $roomsId)
        // ->whereIn('HotelRoomComplementaries.roomId', $roomsId)
        ->where('HotelRooms.status', 1)
        ->select('HotelRooms.id as room_id',
        'HotelRooms.*', 'HotelAmenities.type', 'HotelAmenities.name',
        'Hotels.hotelName','Hotels.address',
        'Options.name as roomTypeName','Options.group',
        'Hotels.telephone','Hotels.price_started',
        'HotelRoomImages.fileName as roomImage', 
        'HotelRoomComplementaries.amenityId as facilityId')
        ->groupBy('HotelRooms.id')->Paginate(9);  //dd($roomData);
        // $fid = DB::table('HotelRoomComplementaries')->whereIn('HotelRoomComplementaries.roomId', $roomsId)->get();   // dd($fid);                                                                                             
        // $fids = $fid->pluck('amenityId');
        // $amenities = DB::table('HotelAmenities')->wherein('id', $fids)->select('name')->groupBy('type')->get();
        $owner = DB::table('users')->whereIn('id', $roomData->userId)->get();
        dd($owner);


        return view('admin.hotels.hotel-room', compact('roomData'));
    }

    public function HotelCity1()
    {


        return view('admin.hotels.city');
    }

    public function HotelCity2(){
        return view('admin.hotels.city');
    }

    public function HotelCity(){
        return view('admin.hotels.city');
    }
    public function AddHotel(request $request){

        if($request->isMethod('get')){
            return view('admin.hotels.addHotels');
        }else{

            $insert = $request->all();
            dd($insert);

            $insert2 = table('Hotels')->create()

            return redirect()->route('admin.dashboard');
        }
    }
}
