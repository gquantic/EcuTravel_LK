<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'driver',
        'from',
        'destination',
        'depart_time',
        'adult_price',
        'child_price',
    ];
}
