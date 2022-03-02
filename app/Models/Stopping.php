<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stopping extends Model
{
    use HasFactory;

    protected $fillable = [
        'locality',
        'name_of_the_stop_point',
        'address',
        'note_stopping',
        'condition_stopping',

    ];
}
