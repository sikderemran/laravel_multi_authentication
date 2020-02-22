<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Viewer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('user');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function user($name){
        $user=Viewer::where('u_name',$name)->get();
        return view('user',compact('user'));
    }
}
