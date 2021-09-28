<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GCashInfo extends Model
{
    use HasFactory;

    protected $fillable=[
        'gname',
        'gnumber',
    ];
}
