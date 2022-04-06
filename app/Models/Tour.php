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
        'travel_time_driver',

        'route',
        'vehicle',

        'city_of_arrival',
        'departure_city',

        'route_number',
        'route_depart_station',
        'route_arrival_station',

        'route_departure_address',
        'route_arrival_address',

        'route_basic_price',
        'route_child_price',
        'route_bag_price',

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
