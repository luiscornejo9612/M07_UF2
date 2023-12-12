<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(){
        $email = Request('email');
        $password = Request('password');
        if($email === 'professor@email.com'){
            return view('login.professor')
            ->with('password',$password)
            ->with('email',$email);
        }
        else if($email === 'alumne@email.com'){
            return view('login.alumne')
            ->with('password',$password)
            ->with('email',$email);
        }
        else if($email === 'centre@email.com'){
            $professors = [
                [
                    'id' => 1,
                    'nom' => 'Jordi',
                    'email' => 'jordi@exemple.com',
                    'curs' => '2',
                ],
                [
                    'id' => 2,
                    'nom' => 'Oriol',
                    'email' => 'oriol@exemple.com',
                    'curs' => '2',
                ],
                [
                    'id' => 3,
                    'nom' => 'Carlota',
                    'email' => 'carlota@exemple.com',
                    'curs' => '2',
                ]
                ];
            return view('login.centre')->with('email',$email)
            ->with('professors', $professors);
        }
        else{
            return view('login.error');
        }
    }

    public function error(){
        return view('login.error');
    }

    public function datosUser(){
        $nom= request('nom');
        $cognom = request('cognom');
        $email= request('email');
        $password= request('password');
    
        return view('practica3.mostrarInfo')->with([
            'nom' => $nom,
            'cognom' => $cognom,
            'email' => $email,
            'password' => $password
            ]);
    }
}
