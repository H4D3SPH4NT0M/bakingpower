<?php

namespace App\Http\Controllers;
use App\Models\Sudo;
use App\Models\User;



use Illuminate\Http\Request;

class SudoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(auth()->user()->usertype == 'sudo') {
            $sudo = User::all();
            return view('admin', compact('sudo'));
        } else {
            echo "You are not authorized to view this page helaas => ;-)" .' '. auth()->user()->name;
            // dd(auth()->user()->usertype);
        }

        
    }

    //get all user_orders from database
    public function getAllUserOrders()
    {
        $user_orders = Sudo::all();
        return view('admin', ['user_orders' => Sudo::all()]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sudo  $sudo
     * @return \Illuminate\Http\Response
     */
    public function show(Sudo $sudo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sudo  $sudo
     * @return \Illuminate\Http\Response
     */
    public function edit(Sudo $sudo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sudo  $sudo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sudo $sudo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sudo  $sudo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sudo $sudo)
    {
        //
    }
}
