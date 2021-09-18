<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationSingleOrder extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'reservation_id',
        'food_id',
        'food_title',
        'description',
        'price',
        'categories',
    ];

}
