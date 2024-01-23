<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuaris;

class loginController extends Controller
{
    function login()
    {

        $email = Request('email');
        $password = Request('password');
        $nom = Request('nom');

        $usuario = Usuaris::where('email', $email)->first();
        $professors = Usuaris::where('rol', 'professor')->get();
        $alumnes = Usuaris::where('rol', 'alumne')->get();

        $usuario = Usuaris::where('email', $email)->first();
        if ($usuario->rol == "professor") {
            return view('login.professor')
                ->with('email', $email)
                ->with('nom', $nom)
                ->with('alumnes', $alumnes);
        } else if ($usuario->rol == "alumne") {
            return view('login.alumne')
                ->with('email', $email);
        } else if ($usuario->rol == "admin") {
            return view('login.centre')
                ->with('email', $email)
                ->with('professors', $professors);
        }
        // else if($email === 'centre@email.com'){
        //     $professors = [
        //         [
        //             'id' => 1,
        //             'nom' => 'Jordi',
        //             'email' => 'jordi@exemple.com',
        //             'curs' => '2',
        //         ],
        //         [
        //             'id' => 2,
        //             'nom' => 'Oriol',
        //             'email' => 'oriol@exemple.com',
        //             'curs' => '2',
        //         ],
        //         [
        //             'id' => 3,
        //             'nom' => 'Carlota',
        //             'email' => 'carlota@exemple.com',
        //             'curs' => '2',
        //         ]
        //         ];
        //     return view('login.centre')->with('email',$email)
        //     ->with('professors', $professors);
        // }
        // else{
        //     return view('login.error');
        // }
    }


    public function editAlumnes($id)
    {
        $usuario = Usuaris::find($id);
        return view('practica3.edit')->with('alumno', $usuario);
    }

    public function updateAlumnes(Request $request, $id)
    {
        $usuario = Usuaris::find($id);
        // Actualizar los valores del usuario
        $usuario->nom =  $request->input('nom');
        $usuario->cognom = $request->input('cognom');
        $usuario->email = $request->input('email');
        $usuario->password =  $request->input('password');
        $usuario->rol = $request->input('rol');

        // Guardar los cambios en la base de datos
        $usuario->save();

        $alumnes = Usuaris::where('rol', 'alumne')->get();

        // Redirigir a alguna vista o ruta después de la actualización
        return view('login.professor')->with('alumnes', $alumnes);
    }

    public function deleteAlumnes($id)
    {
        $usuario = Usuaris::find($id);
        $usuario->delete();
        $alumnes = Usuaris::where('rol', 'alumne')->get();

        return view('login.professor')->with('alumnes', $alumnes);
    }

    public function añadirUserAlumne()
    {
        return view('login.añadirUserAlumne');
    }

    public function añadirAlumnes()
    {
        
        $id = request('id');
        $nom = request('nom');
        $cognom = request('cognom');
        $email = request('email');
        $password = request('password');
        $rol = request('rol');

        

        Usuaris::create([
            'id' => $id,
            'nom' => $nom,
            'cognom' => $cognom,
            'email' => $email,
            'password' => $password,
            'rol' => $rol,
        ]);

        $alumnes = Usuaris::where('rol', 'alumne')->get();
        return view('login.professor')
            ->with('alumnes', $alumnes);
    }

/*<----------------------------------------------------------------------------------------------->*/


    public function editProfessor($id)
    {
        $usuario = Usuaris::find($id);
        return view('practica3.editProfessors')->with('professor', $usuario);
    }

    public function updateProfessor(Request $request, $id)
    {

        $usuario = Usuaris::find($id);
        // Actualizar los valores del usuario
        $usuario->nom =  $request->input('nom');
        $usuario->cognom = $request->input('cognom');
        $usuario->email = $request->input('email');
        $usuario->password =  $request->input('password');
        $usuario->rol = $request->input('rol');

        // Guardar los cambios en la base de datos
        $usuario->save();

        $profesor = Usuaris::where('rol', 'professor')->get();
        // Redirigir a alguna vista o ruta después de la actualización
        return view('login.centre')->with('professors', $profesor);
    }

    public function deleteProfessor($id)
    {
        $usuario = Usuaris::find($id);
        $usuario->delete();
        $profesor = Usuaris::where('rol', 'professor')->get();

        return view('login.centre')->with('professors', $profesor);
    }

    public function añadirUser()
    {
        return view('login.añadirUser');
    }

    public function añadirProfessor()
    {
        
        $id = request('id');
        $nom = request('nom');
        $cognom = request('cognom');
        $email = request('email');
        $password = request('password');
        $rol = request('rol');

        

        Usuaris::create([
            'id' => $id,
            'nom' => $nom,
            'cognom' => $cognom,
            'email' => $email,
            'password' => $password,
            'rol' => $rol,
        ]);

        $professors = Usuaris::where('rol', 'professor')->get();

        return view('login.centre')
            ->with('professors', $professors);
    }


    /*<----------------------------------------------------------------------------------------------->*/



    public function error()
    {
        return view('login.error');
    }

    public function singup()
    {
        $id = request('id');
        $nom = request('nom');
        $cognom = request('cognom');
        $email = request('email');
        $password = request('password');
        $rol = request('rol');

        Usuaris::create([
            'id' => $id,
            'nom' => $nom,
            'cognom' => $cognom,
            'email' => $email,
            'password' => $password,
            'rol' => $rol,

        ]);

        return view('practica3.mostrarInfo')->with([
            'nom' => $nom,
            'cognom' => $cognom,
            'email' => $email,
            'password' => $password
        ]);
    }


    
}
