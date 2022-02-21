<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'number_routes',
        'type_routes',
        'depart_station',
        'departure_address',
        'arrival_station',
        'arrival_address',
        'basic_price',
        'child_price',
        'baggage_cost',
    ];
}
