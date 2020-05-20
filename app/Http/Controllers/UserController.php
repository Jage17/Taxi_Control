<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    
    public function __construct()
    {
        $this->middleware('admin');
    }
    
     public function index(User $model)
    {
        return view('users.index');
    }

    public function store(Request $request)
    {  
        $datos = request()->all();
        $users::insert($datos); 
    }

}
