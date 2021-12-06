<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login(){
        return view('login-register.login');
    }
    function postLogin(Request $request){
        if (Auth::attempt($request->except('_token'))){
            return redirect('/layout/index');
        }else{
            echo 'lỗi';
        }



    }
    function logout(){
        Auth::logout();
        return redirect('/');
    }
}
