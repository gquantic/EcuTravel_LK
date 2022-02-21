<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
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
        return view('profile.routes.index', [
            'pageData' => $this->pageData,
            'routes' => Route::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.routes.create', [
            'pageData' => $this->pageData,
            'drivers' => Driver::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'number_routes'=>'required',
            'route_type'=>'required',
            'depart_station'=>'required',
            'departure_address'=>'required',
            'arrival_station'=>'required',
            'arrival_address'=>'required',
            'basic_price'=>'required',
            'child_price'=>'required',
            'bag_price'=>'required',
        ]);
        Route::create([
            'user' => \Auth::id(),
            'number_routes' => $request->number_routes,
            'type_routes' => $request->type_routes,
            'depart_station' => $request->depart_station,
            'departure_address' => $request->departure_address,
            'arrival_station' => $request->arrival_station,
            'arrival_address' => $request->arrival_address,
            'basic_price' => $request->basic_price,
            'child_price' => $request->child_price,
            'bag_price' => $request->bag_price,
        ]);

        return redirect()->route('routes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Route $route)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route $route)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route)
    {
        //
    }
}
