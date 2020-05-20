<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user=Auth::user();
        if ($user->superAdministrador()){
            return view('dashboard');
        }else
        if ($user->secretaria()){
            return view('dashboard2');
        }else
        if ($user->taxista()){
            return view('dashboard3');
        }
    }
}
