<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/dashboard/');

/**
 * Routes for dashboard pages
 */
Route::prefix('dashboard')->middleware('auth')->group(function () {
    $pageData = [
        'header' => true,
        'breadcrumbs' => [
            true,
            'items' => [],
        ],
    ];

    Route::get('/', function () use ($pageData) {
        return view('profile.dashboard', [
            'pageData' => $pageData,
//            'tours' => \App\Models\Tour::all(),
        ]);
    });

    /** PROFILE **/
//    Route::get('/profile');

    Route::get('/reference', function () use ($pageData) {
        return view('profile.reference', compact('pageData'));
    });


    Route::resources([
        'drivers' => \App\Http\Controllers\DriverController::class,
        'routes' => \App\Http\Controllers\RouteController::class,
        'vehicle'=> \App\Http\Controllers\VehicleController::class,
        'tours'=> \App\Http\Controllers\TourController::class,
        'account'=>\App\Http\Controllers\AccountController::class,
        'stopping'=>\App\Http\Controllers\StoppingController::class,
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::redirect('home', '/dashboard/');
