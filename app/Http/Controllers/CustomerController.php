<?php

namespace App\Http\Controllers;
use App\User;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Customers = User::orderBy('id','DESC')->paginate(15);
        return view('customers.index',compact('Customers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customers.index');
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
        $Customer = new User();
        $Customer->first_name = $request->first_name;
        $Customer->second_name = $request->second_name;
        $Customer->surname = $request->surname;
        $Customer->second_surname = $request->second_surname;
        $Customer->email = $request->email;
        $Customer->telephone = $request->telephone;

        $Customer->save();
        return  redirect()->route('Customer.index',compact('Customer'))->with('info','Registro Guardado satisfactoriamente');

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
        $Customer = User::find($id);
        return view('customers.show',compact('Customer'));

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
        $Customer = User::find($id);
        return view('customers.edit',compact('Customer'));
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

        $Customer = User::find($id);
        $Customer->first_name = $request->first_name;
        $Customer->second_name = $request->second_name;
        $Customer->surname = $request->surname;
        $Customer->second_surname = $request->second_surname;
        $Customer->email = $request->email;
        $Customer->telephone = $request->telephone;

        $Customer->save();
        return  redirect()->route('Customer.index')->with('info','Registro actualizado satisfactoriamente');


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
        $Customer = User::find($id)->delete();
        return redirect()->route('customers.index',compact($Customer))->with('info','Registro eliminado satisfactoriamente');
    }
}
