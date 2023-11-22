<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    public function signin ($v1, $v2, $v3, $v4){
        $titulo =  $v1. " " .$v2. " " .$v3. " ". $v4;
        return view('signin') ->with('signin', $titulo);
    }

    public function signup ($v1, $v2, $v3){
        $titulo =  $v1. " " .$v2. " " .$v3;
        return view('signup') ->with('signup', $titulo);
    }
}
