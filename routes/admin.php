<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminHotelController;
use App\Http\Controllers\Admin\AdminBookingController;
use App\Http\Controllers\Admin\AdminCustomerController;



Route::prefix('owner')->name('admin.')->group(function () {

    Route::controller(AdminAuthController::class)->group(function () {


        Route::match(['get', 'post'], 'login', 'login')->name('login');
    });
    Route::middleware(IsAdmin::class)->group(function () {

        Route::controller(AdminController::class)->group(function (){
            Route::get('dashboard', 'dashboard')->name('dashboard');
            Route::post('dashboard', 'dashboard')->name('dashboard');
            Route::get('add-blogs', 'CreateBlogs')->name('add-blogs');
            Route::post('add-blogs', 'CreateBlogs')->name('add-blogs');
            Route::get('editAboutus', 'aboutus')->name('edit-aboutus');
            Route::post('editAboutus', 'aboutus')->name('edit-aboutus');
            Route::get('list-blogs', 'FetchBlogs')->name('list-blogs');
            Route::post('list-blogs', 'FetchBlogs')->name('list-blogs');
            Route::get('policies', 'policies')->name('policies');
            Route::post('policies', 'policies')->name('policies'); 
            
            Route::get('customer-list', 'customerList')->name('customer-list');
        });

        Route::controller(AdminHotelController::class)->group(function (){
            Route::get('hotel-room', 'HotelRoom')->name('hotel-room');
            Route::get('hotel-city', 'HotelCity')->name('hotel-city');
            Route::get('hotel/add', 'AddHotel')->name('addhotel');
            Route::post('hotel/add', 'AddHotel')->name('addhotel');
            Route::get('hotel/list', 'ListHotel')->name('hotellist');
        });


        Route::controller(AdminBookingController::class)->group(function () {

            Route::get('today-booking', 'todayBooking')->name('today-booking');
            Route::get('all-booking', 'allBooking')->name('all-booking');
            Route::get('contactUs-list', 'contactUsList')->name('contactUs-list');             
            Route::get('discount', 'Discounts')->name('discount');
            Route::get('add-discount', 'createDiscounts')->name('Add-discount');                      
            Route::get('add-offers', function(){
               return view('admin.booking.add-offers');
            })->name('offeroffers');

          
            Route::delete('delete-conatctUs/{id}','contactUsDelete')->name('delete-contactUs');
           

        });
    });
});
