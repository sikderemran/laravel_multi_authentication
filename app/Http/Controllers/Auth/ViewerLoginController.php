<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class ViewerLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:viewer');
    }
    public function showLoginForm(){
        return view('auth.viewer-login');
    }
    public function login(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);
        if(Auth::guard('viewer')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->intended(route('viewer.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email','password'));
    }
}
