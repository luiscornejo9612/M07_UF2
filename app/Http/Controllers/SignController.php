<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuaris;

class SignController extends Controller
{
    //PRACTICA 2
    public function signin ($v1, $v2, $v3, $v4){
        $titulo =  $v1. " " .$v2. " " .$v3. " ". $v4;
        return view('signin') ->with('signin', $titulo);
    }

    public function signup ($v1, $v2, $v3){
        $titulo =  $v1. " " .$v2. " " .$v3;
        return view('signup') ->with('signup', $titulo);
    }

    //PRÁCTICA 3
    public function signInPractica3(){
        return view('practica3.sigin');
    }
    public function signUpPractica3(){
        return view('practica3.sigup');
    }
}
