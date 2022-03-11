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
        'route_depart_station',
        'route_arrival_station',

        'route_departure_address',
        'route_arrival_address',

        'vehicle_type',
        'vehicle_model_vehicle',
        'vehicle_gus_number_vehicle',

        'depart_time',
        'arrival_time',
        'departure_date',
        'arrival_date',

        'note_tours',
        'condition_tours'
    ];

}
