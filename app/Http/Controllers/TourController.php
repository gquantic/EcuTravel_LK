<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Route;
use App\Models\Tour;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->pageData = [
            'header' => true
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::all();
        $vehicles = Vehicle::all();
        $routes = Route::all();
        $tours = Tour::all();

         return view('profile.tours.index', [
             'pageData' => $this->pageData,
             'tours' => $tours,
             'drivers' =>$drivers,
             'vehicles' =>$vehicles,
             'routes'=> $routes
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $routes = Route::where('user', \Auth::id())->get();

        return view('profile.tours.create', [
            'pageData' => $this->pageData,
            'drivers' => Driver::where('user_id', \Auth::id())->get(),
            'vehicles' => Vehicle::where('user_id', \Auth::id())->get(),
            'routes'=> $routes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'depart_time' => 'required',
            'arrival_time' => 'required',
            'departure_date' => 'required',
            'arrival_date' => 'required',
        ]);


        $routeNumber = Route::where('id', $request->get('route'))->first();
        $vehicleType = Vehicle::where('id', $request->get('vehicle'))->first();

        $tour = new Tour([
            'user' => \Auth::id(),
            'driver' => $request->get('driver'),
            'driver_2' => $request->get('driver_2'),
            'route' => $request->get('route'),
            'vehicle' => $request->get('vehicle'),

            'route_number' => $routeNumber->number_routes,
            'route_depart_station' => $routeNumber->depart_station,
            'route_arrival_station' => $routeNumber->arrival_station,

            'route_departure_address' => $routeNumber->departure_address,
            'route_arrival_address' => $routeNumber->arrival_address,

//            'vehicle_type' => $vehicleType->type_ts,
            'vehicle_model_vehicle' => $vehicleType->model_vehicle,
            'vehicle_gus_number_vehicle' => $vehicleType->gus_number_vehicle,

            'depart_time' => $request->get('depart_time'),
            'arrival_time' => $request->get('arrival_time'),

            'departure_date' => $request->get('departure_date'),
            'arrival_date' => $request->get('arrival_date'),
            'note_tours' => $request->get('note_tours'),
            'condition_tours' => $request->get('condition_tours')
        ]);

        $tour->save();
        return redirect()->route('tours.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        return view('profile.tours.show', compact('tour'), ['pageData' => $this->pageData]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        $drivers = Driver::all();
        $routes = Route::all();
        $vehicles = Vehicle::all();

        return view('profile.tours.edit', compact('tour'), [
            'pageData' => $this->pageData,
            'drivers' => $drivers,
            'routes' => $routes,
            'vehicles' => $vehicles
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Tour $tour)
    {
        $routeNumber = Route::where('id', $request->get('route'))->first();

        $tour->update($request->all());
        return redirect()->route('tours.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Tour $tour)
    {
        $tour->delete();
        return redirect()->route('tours.index');
    }
}
