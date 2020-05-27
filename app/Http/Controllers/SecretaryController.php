<?php

namespace App\Http\Controllers;
use App\User;
use App\Secretary;
use Illuminate\Http\Request;

class SecretaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Secretarys = User::orderBy('id','DESC')->paginate(15);
        return view('secretarys.index',compact('secretarys'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('secretarys.create');
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
        $data = request()->all();

        User::create([
            'first_name' => $data['first_name'],
            'second_name' => $data['second_name'],
            'surname' => $data['surname'],
            'second_surname' => $data['second_surname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'telephone' => $data['telephone'],
            'role_id' => '2'
        ]);

        return  redirect()->route('Secretary.index',compact('Secretary'))->with('info','Registro Guardado satisfactoriamente');

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
        $Secretary = User::find($id);
        return view('secretarys.show',compact('Secretary'));

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
        $Secretary = User::find($id);
        return view('secretarys.edit',compact('Secretary'));
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

        $Secretary = User::find($id);
        $Secretary->first_name = $request->first_name;
        $Secretary->second_name = $request->second_name;
        $Secretary->surname = $request->surname;
        $Secretary->second_surname = $request->second_surname;
        $Secretary->email = $request->email;
        $Secretary->telephone = $request->telephone;

        $Secretary->save();
        return  redirect()->route('Secretary.index')->with('info','Registro actualizado satisfactoriamente');


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
        $Secretary = User::find($id)->delete();
        return redirect()->route('secretarys.index',compact($Secretary))->with('info','Registro eliminado satisfactoriamente');
    }
}
