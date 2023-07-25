<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Admin\AdminAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear', function () {
    Artisan::call('route:clear');
    Artisan::call('optimize');
    Artisan::call('optimize:clear');
    dd('clear');
});

Route::get('/', function () {

    return view('user.index');
})->name('index');


Route::get('about', function () {

    return view('user.about');
})->name('about');

Route::get('hotel-details', function () {

    return view('user.hoteldetails');
})->name('hotel-details');

Route::get('privacy', function () {

    return view('user.privacy');
})->name('privacy');

Route::get('terms-condition', function () {

    return view('user.termsandcondition');
})->name('terms-condition');

Route::get('blog', function () {

    return view('user.blog');
})->name('blog');


Route::controller(UserAuthController::class)->group(function () {

    Route::Post('signup', 'signup')->name('signup');
    Route::Post('login', 'login')->name('login');
    Route::Post('phone-login', 'phoneLogin')->name('phone-login');
    Route::get('forgot-password', 'forgotPassword')->name('forgot-password');
    Route::any('logout', 'logout')->name('logout');
});

Route::controller(ContactUsController::class)->group(function () {

    Route::get('contact-us', 'contactView')->name('contact-us');
    Route::post('contact', 'submitContactForm')->name('contact');
});

Route::controller(HomeController::class)->group(function () {

    Route::get('hotels', 'getHotelData')->name('hotels');
});
