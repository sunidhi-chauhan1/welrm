<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotels;
use App\Models\HotelRooms;
use App\Models\Booking;
use App\Models\Wishlist;
use DB;
function addProduct($request, $type){
    if ($type == 'wishlist') {
        $methodType = 'App\Models\Wishlist';
    }
    $tableBox = $methodType::query();
    $tableBox->where('product_id', $request->product_id);
    $tableBox->where('variant_sku', $request->variant_sku);

    
    // Check if CSRF token is the same before and after login
    $csrfTokenBeforeLogin = csrf_token();

    if (auth()->user()) {    
        // Update user_id for rows with the same CSRF token
        if ($csrfTokenBeforeLogin == csrf_token()) {
            $tableBox->where('guest', $csrfTokenBeforeLogin)->update(['user_id' =>auth()->user()->id]);
        }
       
        if ($tableBox->where('user_id', auth()->user()->id)->exists()) {
            if ($type == 'wishlist') {
                $tableBox->where('user_id', auth()->user()->id)->delete();
                return 'deleted_existing';
            }
            
        } else {
            $data = [
                'user_id'       =>  auth()->user()->id,     
                'guest' =>  csrf_token(),
                'product_id'    =>  $request->product_id
            ];
            
            $methodType::create($data);
            return 'newly_created';
        }
    } else {
        $count = 1;
        if ($tableBox->where('guest', csrf_token())->exists()) {
            if ($type == 'wishlist') {
                $tableBox->where('guest', csrf_token())->delete();
                return 'deleted_existing';
            }
        } else {
            $data = [
                'guest' =>  csrf_token(),
                'product_id'    =>  $request->product_id,
                'variant_sku'   =>  $request->variant_sku
            ];
            $methodType::create($data);
            return 'newly_created';         
        }
    }
    
}