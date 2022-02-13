<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('drivers', function () {
    $drivers = \App\Models\Driver::all();
    return json_encode($drivers, JSON_UNESCAPED_UNICODE);
});

Route::get('routes', function () {
    $routes = \App\Models\Route::all();
    return json_encode($routes, JSON_UNESCAPED_UNICODE);
});
