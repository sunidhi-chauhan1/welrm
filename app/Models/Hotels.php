<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    use HasFactory;


    public function  bookings()
    {

        return $this->hasMany(Booking::class, 'hotelId', 'id');
    }
}
