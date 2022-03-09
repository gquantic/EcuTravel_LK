<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver',
        'driver_2',
        'route',
        'vehicle',
        'route_number',

        'depart_time',
        'arrival_time',
        'departure_date',
        'arrival_date',

        'note_tours',
        'condition_tours'
    ];

}
