<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver',
        'route',
        'vehicle',
        'depart_time',
        'arrival_time',
        'adult_price',
        'child_price',
        'bag_price',
    ];

}
