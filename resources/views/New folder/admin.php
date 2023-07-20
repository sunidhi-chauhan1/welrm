<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminAuthController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::prefix('owner')->name('admin.')->group(function () {

    Route::controller(AdminAuthController::class)->group(function () {

        Route::match(['get', 'post'], 'login', 'login')->name('login');
    });
    Route::middleware(IsAdmin::class)->group(function () {

        Route::controller(AdminController::class)->group(function () {

            Route::get('dashboard', 'dashboard')->name('dashboard');
        });
    });
});
