<?php

namespace App\Http\Controllers;

use App\Models\Stopping;
use Illuminate\Http\Request;

class StoppingController extends Controller
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
        return view('profile.stopping.index', [
            'pageData' => $this->pageData,
            'stoppings'=>Stopping::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.stopping.create', ['pageData' => $this->pageData]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'locality'=>'required',
//            'name_of_the_stop_point'=>'required',
//            'address'=>'required',
//            'note_stopping'=>'required',
//            'сondition_stopping'=>'required',
//        ]);


        $stopping = new Stopping([
            'user' => \Auth::id(),
            'locality'=> $request->get('locality'),
            'name_of_the_stop_point'=>$request->get('name_of_the_stop_point'),
            'address'=>$request->get('address'),
            'note_stopping'=>$request->get('note_stopping'),
            'condition_stopping'=>$request->get('condition_stopping'),
        ]);
        $stopping ->save();
        return redirect()->route('stopping.index')->with('success', 'Пункт успешно добавлен!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stopping  $stopping
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Stopping $stopping)
    {
        return view('profile.stopping.show', compact('stopping'), ['pageData' => $this->pageData]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stopping  $stopping
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Stopping $stopping)
    {
        return view('profile.stopping.edit', compact('stopping'), ['pageData' => $this->pageData]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stopping  $stopping
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Stopping $stopping)
    {
        $stopping->update($request->all());

        return redirect()->route('stopping.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stopping  $stopping
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Stopping $stopping)
    {
        $stopping->delete();
        return redirect()->route('stopping.index');
    }
}
