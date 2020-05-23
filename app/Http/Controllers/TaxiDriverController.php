<?php

namespace App\Http\Controllers;

use App\TaxiDriver;
use App\User;
use Illuminate\Http\Request;

class TaxiDriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $Taxidrivers = User::orderBy('id','DESC')->paginate(15);
        return view('taxi_drivers.index',compact('Taxidrivers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('taxi_drivers.index');
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
        $Taxidriver = new User();
        $Taxidriver->first_name = $request->first_name;
        $Taxidriver->second_name = $request->second_name;
        $Taxidriver->surname = $request->surname;
        $Taxidriver->second_surname = $request->second_surname;
        $Taxidriver->email = $request->email;
        $Taxidriver->telephone = $request->telephone;
        $Taxidriver->no_licencia = $request->no_licencia;
        $Taxidriver->zone_id = $request->zone_id;

        $Taxidriver->save();
        return  redirect()->route('TaxiDriver.index',compact('Taxidriver'))->with('info','Registro Guardado satisfactoriamente');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $Taxidriver = User::find($id);
        return  view('taxi_drivers.show',compact('Taxidriver'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Taxidriver = User::find($id);
        return view('taxi_drivers.edit',compact('Taxidriver'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $Taxidriver = User::find($id);
        $Taxidriver->first_name = $request->first_name;
        $Taxidriver->second_name = $request->second_name;
        $Taxidriver->surname = $request->surname;
        $Taxidriver->second_surname = $request->second_surname;
        $Taxidriver->email = $request->email;
        $Taxidriver->telephone = $request->telephone;
        $Taxidriver->no_licencia = $request->no_licencia;
        $Taxidriver->zone_id = $request->zone_id;

        $Taxidriver->save();
        return  redirect()->route('TaxiDriver.index',compact('Taxidriver'))->with('info','Registro Guardado satisfactoriamente');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Taxidriver = User::find($id)->delete();
        return redirect()->route('TaxiDriver.index',compact($Taxidriver))->with('info','Registro eliminado satisfactoriamente');
    }
}
