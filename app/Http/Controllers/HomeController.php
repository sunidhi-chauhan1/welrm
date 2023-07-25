<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function getHotelData(Request $request)
    {
        $query = $request->input('query');

        $suggestions = DB::table('hotels')
            ->where('hotelName', 'LIKE', "%{$query}%")
            ->orWhere('address', 'LIKE', "%{$query}%")
            ->get();

        return response()->json($suggestions);
    }
}
