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
            'header' => true,
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
         $tours = Tour::all();
         return view('profile.tours.index', [
             'pageData' => $this->pageData,
             'tours' => $tours,
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.tours.create', [
            'pageData' => $this->pageData,
            'drivers' => Driver::all(),
            'vehicles' => Vehicle::all(),
            'routes' => Route::all()
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
            'driver' => 'required',
            'depart_time' => 'required',
            'arrival_time' => 'required',
            'departure_date' => 'required',
            'arrival_date' => 'required',
        ]);

        $tour = new Tour([
            'user' => \Auth::id(),
            'driver' => "1",
            'route' => $request->get('route'),
            'vehicle' => $request->get('vehicle'),
            'depart_time' => $request->get('depart_time'),
            'arrival_time' => $request->get('arrival_time'),
            'departure_date' => $request->get('depart_date'),
            'arrival_date' => $request->get('arrival_date'),
            'note_tours' => $request->get('note_tours')
        ]);
        $tour->save();
        return redirect('dashboard/tours');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        //
    }
}
