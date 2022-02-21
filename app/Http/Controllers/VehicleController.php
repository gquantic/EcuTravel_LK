<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use http\Exception\BadConversionException;
use Illuminate\Http\Request;

/**
 * @property array $pageData
 */

class VehicleController extends Controller
{
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
        $vehicles = Vehicle::all();

        return view('profile.vehicles.index', [
            'pageData' => $this->pageData,
            'vehicles' => $vehicles
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.vehicles.create', ['pageData' => $this->pageData]);

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
            'type_ts'=>'required',
            'gus_number_vehicle'=>'required',
            'model_vehicle'=>'required'
        ]);

        Vehicle::create([
            'user_id'=> \Auth::id(),
            'type_ts'=> $request->type_ts,
            'gus_number_vehicle'=> $request->gus_number_vehicle,
            'model_vehicle'=> $request->model_vehicle,

        ]);

        return redirect()->route('vehicle.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {

        return view('profile.vehicles.edit',compact('vehicle'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
}
