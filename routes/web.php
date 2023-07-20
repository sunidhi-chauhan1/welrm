<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
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

Route::get('contact', function () {

    return view('user.contact');
})->name('contact');

//Routes for AUTH
Route::controller(UserAuthController::class)->group(function () {

    Route::Post('signup', 'signup')->name('signup');
    Route::Post('login', 'login')->name('login');
    Route::any('logout', 'logout')->name('logout');
    
});

Route::controller(ContactUsController::class)->group(function () {

    Route::post('contact', 'submitContactForm')->name('contact');
});



