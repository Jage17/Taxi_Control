<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vehicles = Vehicle::paginate(10);
        return view('vehicles.index',compact('vehicles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vehicles.index');
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
        $vehicle = new Vehicle();
        $vehicle->color = $request->color;
        $vehicle->no_placa = $request->no_placa;
        $vehicle->year = $request->year;
        $vehicle->model_id = $request->mode_id;
        $vehicle->brand_id = $request->brand_id;

        $vehicle->save();
        return  redirect()->route('Vehicle.index',compact('vehicle'))->with('info','Registro Guardado satisfactoriamente');

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
        $vehicle = Vehicle::find($id);
        return  view('vehicles.show',compact('vehicle'));

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
        $vehicle = Vehicle::find($id);
        return view('vehicles.edit',compact('vehicle'));
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

       $vehicle = Vehicle::find($id);
       $vehicle->color = $request->color;
       $vehicle->no_placa = $request->no_placa;
       $vehicle->year = $request->year;
       $vehicle->model_id = $request->mode_id;
       $vehicle->brand_id = $request->brand_id;

       $vehicle->save();
       return  redirect()->route('Vehicle.index',compact('vehicle'))->with('info','Registro Guardado satisfactoriamente');



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

        $vehicle = Vehicle::find($id)->delete();
        return redirect()->route('Vehicle.index',compact($vehicle))->with('success','Registro eliminado satisfactoriamente');
    }
}
