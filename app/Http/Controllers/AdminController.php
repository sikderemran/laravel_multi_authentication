<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\User;
use App\Viewer;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin');
    }
    public function allUser(){
        $user=User::all();
        return view('user.all-user',compact('user'));
    }
    public function allEmployee(){
        $viewer=Viewer::all();
        return view('employee.all-employee',compact('viewer'));
    }
    public function activeUser($id){
        $active=User::where('id',$id)->update([
            'status'=>1
         ]);
        return Redirect::to('/admin/all-user');
    }
    public function unactiveUser($id){
        $unactive=User::where('id',$id)->update([
            'status'=>0
         ]);
        return Redirect::to('/admin/all-user');
    }
    public function deleteUser($id){
        $delete=User::where('id',$id)->delete();
        return Redirect::to('/admin/all-user');
    }
    public function activeEmployee($id){
        $active=Viewer::where('id',$id)->update([
            'status'=>1
         ]);
        return Redirect::to('/admin/all-employee');
    }
    public function unactiveEmployee($id){
        $unactive=Viewer::where('id',$id)->update([
            'status'=>0
         ]);
        return Redirect::to('/admin/all-employee');
    }
    public function deleteEmployee($id){
        $delete=Viewer::where('id',$id)->delete();
        return Redirect::to('/admin/all-employee');
    }
    public function editEmployee($id){
        $edit=Viewer::where('id',$id)->get();
        return view('employee.edit-employee',compact('edit'));
    }
    public function saveEmployee(Request $request,$id){
        $c_earn=request('t_earn')-request('l_earn');
        $today_earn=$c_earn-request('c_earn');
        $code=$request->file('code');
        if($code){
            $code_name=str_random(5);
    		$text=strtolower($code->getClientOriginalExtension());
    		$code_full_name=$code_name.'.'.$text;
    		$upload_path='asset/js/js/';
    		$code_url=$upload_path.$code_full_name;
            $success=$code->move($upload_path,$code_full_name);
            if($success){
                $edit=Viewer::where('id',$id)->update([
                    'code'=>$code_url,
                    'url'=>request('url'),
                    't_earn'=>request('t_earn'),
                    'l_earn'=>request('l_earn'),
                    'c_earn'=>$c_earn,
                    'to_earn'=>$today_earn,
                ]);
            }else{
                $edit=Viewer::where('id',$id)->update([
                    'code'=>request('code'),
                    'url'=>request('url'),
                    't_earn'=>request('t_earn'),
                    'l_earn'=>request('l_earn'),
                    'c_earn'=>$c_earn,
                    'to_earn'=>$today_earn,
                ]);
            }
        }
        return Redirect::to('admin/all-employee');
    }
}
