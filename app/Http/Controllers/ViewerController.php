<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Viewer;

class ViewerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:viewer');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('viewer');
    }
    public function employeeDetails(){
        $viewer=Viewer::all();
        return view('employee.employee-details',compact('viewer'));
    }
}
