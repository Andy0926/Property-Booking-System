<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        //dd(Auth::id());
        return view('home');
    }
    // public function home(){
    //     //dd(Auth::id());
    //     return view('home');
    // }
    public function aboutUs(){
        return view('aboutUs');
    }
}
