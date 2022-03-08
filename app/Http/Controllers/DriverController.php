<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Tour;
use Illuminate\Http\Request;

/**
 * @property array $pageData
 */
class DriverController extends Controller
{
    public function __construct()
    {
        $this->pageData = [
            'header' => true,
            'user_id',
            'name',
            'passport_number',
            'position',
            'note_drivers',
            'condition_driver',
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.drivers.index', [
            'pageData' => $this->pageData,
            'drivers' => Driver::all(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.drivers.create', ['pageData' => $this->pageData]);
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
            'name'=>'required',
            'passport'=>'required',
            'position'=> 'required',
        ]);


        Driver::create([
            'user_id' => \Auth::id(),
            'name' => $request->name,
            'passport_number' => $request->passport,
            'position' => $request->position,
            'note_drivers'=>$request->note_drivers,
            'condition_driver'=>$request->condition_driver
        ]);

        return redirect()->route('drivers.index')->with('success', 'Перевозчик успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
       return view('profile.drivers.show', compact('driver'), ['pageData' => $this->pageData]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        return view('profile.drivers.edit', compact('driver'), ['pageData' => $this->pageData]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Driver $driver)
    {
//        $request->validate([
//            'name' => 'required',
//            'passport_number' =>'required',
//            'position' => 'required',
//        ]);

        $driver->update($request->all());

        return redirect()->route('drivers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Driver $driver)
    {
       $driver->delete();
        return redirect()->route('drivers.index');
    }
}
