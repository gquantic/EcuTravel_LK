<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Stopping;
use Illuminate\Http\Request;

class AccountController extends Controller
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
    public function index(Account $account)
    {
        return view('profile.account.index',   compact('account'),[
            'pageData' => $this->pageData,
            'account'=>Account::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.account.create',['pageData' => $this->pageData]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
       $account = new Account([
           'logo'=> $request->file('logo'),
           'brand'=> $request->get('brand'),
       ]);

        if ($request->hasFile('logo'))  {
            $account->logo = $request->file('logo')->store('logo', 'public');
        }


        $account->save();
        return redirect('')->route('account.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        return view('profile.account.show', compact('account'), ['pageData' => $this->pageData,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
