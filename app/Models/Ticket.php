<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable=[
        'bus_id',
        'trip_id',
        'seat_id',
        'user_id',
        'date',
        'time'
    ];
}
