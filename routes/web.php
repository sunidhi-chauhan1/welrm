]<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Admin\AdminAuthController;
use Twilio\Rest\Client;

Route::get('/clear-cache', function () {
    Artisan::call('route:clear');
    Artisan::call('optimize');
    Artisan::call('optimize:clear');
    dd('clear');
});

// Route::get('/', function () {

//     return view('user.index');
// })->name('index');


Route::get('about', function () {

    return view('Others.about');
})->name('about');

Route::get('mailskaro', function () {
    $today = now()->toDateString();
    
        dd($today);
    
})->name('mailskaro');



Route::get('privacy', function () {

    return view('Others.privacy');
})->name('privacy');

Route::get('terms-condition', function () {

    return view('Others.termsandcondition');
})->name('terms-condition');

Route::get('blog', function () {

    return view('Others.blog');
})->name('blog');



Route::controller(HotelsController::class)->group(function () {
    Route::get('hotel-details', 'index')->name('hotel-details');
    Route::get('hotels/list', 'cities')->name('hotellist');
    Route::get('hotelsrooms/{id}', 'hotelsDetails')->name('hotelsrooms');

});
Route::controller(UserAuthController::class)->group(function () {
    Route::Post('signup', 'signup')->name('signup');
    Route::match(['get', 'post'],'login', 'login')->name('login');
    Route::Post('phone-login', 'phoneLogin')->name('phone-login');
    Route::get('forgot-password', 'forgotPassword')->name('forgot-password');
    Route::any('logout', 'logout')->name('logout');
    Route::post('verify-otp', 'verifyOtp')->name('verifyOtp');
    Route::any('for-otp', 'ForOtp')->name('ForOtp');
    Route::get('auth/google/devs','redirectToGoogleDevs')->name('redirectToGoogleDevs');
    Route::get('auth/google/callback','handleGoogleCallback')->name('handleGoogleCallback');
    Route::get('auth/facebook-login','redirectToFacebook')->name('redirectTofacebook');
    Route::get('login/facebook/callback','handleFacebookCallback')->name('handleFacebookCallback');
    Route::get('MyRooms','UsersBooking')->name('usersrooms');
    Route::get('wishlist/{id}', 'AddToWishlist')->name('wishlist');
    Route::get('show-wishlist', 'ShowWishlist')->name('show_wishlist');
    Route::get('remove-wishlist/{id}', 'removeList')->name('remove_wishlist');
    Route::post('cancle/room/{id}', 'CancleBooking')->name('cancleroom');

});




Route::controller(ContactUsController::class)->group(function () {

    Route::get('contact-us', 'contactView')->name('contact-us');
    Route::post('contact', 'submitContactForm')->name('contact');
});

Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'index')->name('index');
    Route::get('hotels-searching', 'getHotelData')->name('hotels-searching');
    Route::any('hotelSearch', 'HotelSearch')->name('hotelSearch');
    Route::any('Booked', 'SendMail')->name('mailsending');
    Route::get('DoneBook', 'DoneBook')->name('DoneBook');
    Route::get('Hotel/{id}' , 'DetailedHotel')->name('HotelsRoom'); 
    Route::get('exclusive/{id}' , 'exclusive')->name('exclusive'); 
    Route::get('rooms_details', 'RoomsDetails')->name('rooms');    
    Route::get('bookhotel/{id}', 'BookRooms')->name('bookhotel');
    Route::get('confirmBooking/{id}', 'ConfirmBooking')->name('confirmBooking');
   

});








