<?php

namespace App\Http\Controllers\Admin;

use DB;
use Carbon\Carbon;
use App\Models\Booking;
use App\Models\ContactUs;
use App\Models\Hotels;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBookingController extends Controller
{

    public function todayBooking()
    {

        $today = now()->toDateString();
      
        $TodayBookings = DB::table('Bookings')->join('Hotels', 'Bookings.hotelId', '=', 'Hotels.id')
                                ->where('Bookings.bookingDate', $today)
                                ->paginate(20);
    //    dd($TodayBookings);
        return view('admin.booking.today-booking', compact('TodayBookings'));
    }

    public function allBooking()
    {

        $booking = DB::table('Bookings')->paginate(10);
     
        $hotelId = DB::table('Bookings')->pluck('hotelId');

        $hotels = DB::table('Hotels')->whereIn('id', $hotelId)->get();

        return view('admin.booking.list-booking', compact('booking', 'hotels'));
    }

    public function contactUsList () {

      $contactUs = ContactUs::paginate(10);
      
      
      return view('admin.contactUs-list',compact('contactUs'));

    }

    public function contactUsDelete ($id) {

        $contact = ContactUs::find($id);


        if(!$contact) {

            return redirect()->back()->with('error', 'Contact not found');
        }
        $contact->delete();

        return redirect()->back()->with('success', 'Contact deleted successfully');

    }

    public function Discounts() {
        $coupons = DB::table('Coupons')->orderby('updated_at', 'DESC' )->paginate(15);//->toArray();
        // dd($coupons);
        return view('admin.offers.coupons', compact('coupons'));

    }
    public function createDiscounts() {
        $offers = DB::table('offers')
        ->create([
            'offer_name' => $request->offer,
            'percentage' => $request->percentage,
        ]);
        // dd($offers);
        return view('admin.booking.offer-list');

    }
    public function Coupons() {
        $coupons = DB::table('Coupons')->orderby('updated_at', 'DESC' )->paginate(12);
        // dd($offers);
        return view('admin.booking.offer-list');

    }
}
