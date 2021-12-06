<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function index(){
        return view('login-register.register');
    }
    function add(Request $request){
        $user = new User;
        $user -> name = $request ->name;
        $user -> password = $request -> password;

        $user->save();

        return redirect('/login');
    }
}
