<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'passport_number',
        'position',
        'note_drivers',
        'condition_driver',
        'number_of_seats',
    ];
}
