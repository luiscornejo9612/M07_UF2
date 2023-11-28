<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(){
        $email = request('email');
        $password = request('password');
        return view('login.alumne') -> with('email', $email);
    }
}
