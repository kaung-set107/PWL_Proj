<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
        //admin login auth
    public function showlogin(){
        return view('admin.auth.login');
    }

    public function postlogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt($request->only('email','password'))){
            return redirect(url('/admin'))->with('success','Welcome Back Admin!');   
        }else{
            return redirect()->back()->with('delete','Something wrong!');
        }
    }

    public function logout(){
        Auth::logout();

        return redirect(url('/admin/login'))->with('logout','You are Logout from Admin Panel');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}