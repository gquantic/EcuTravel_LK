<?php

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
        return view('profile.dashboard', compact('pageData'));
    });

    Route::get('/reference', function () use ($pageData) {
        return view('profile.reference', compact('pageData'));
    });

    Route::resources([
        'drivers' => \App\Http\Controllers\DriverController::class,
        'routes' => \App\Http\Controllers\RouteController::class,
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::redirect('home', '/dashboard/');
