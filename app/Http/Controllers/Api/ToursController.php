<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Route;
use Illuminate\Http\Request;

class ToursController extends Controller
{
    public function __construct()
    {

    }

    public function searchWithRoute($from, $destination)
    {
        $route = Route::where('from', $from)->where('destination', $destination);
        return json_encode($route, JSON_UNESCAPED_UNICODE);
    }
}
