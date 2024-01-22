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

    public function edit($id)
    {
        return view('practica3.edit');
    }

    public function actualizar()
    {
        // Obtener los valores del formulario
        $id = Request('id');
        $nom = Request('nom');
        $cognom = Request('cognom');
        $email = Request('email');
        $password = Request('password');

        // Buscar al usuario por su ID
        $usuario = Usuaris::find($id);
        $professors = Usuaris::where('rol', 'professor')->get();

        // Verificar si el usuario existe
        if ($usuario) {
            // Actualizar los valores del usuario
            $usuario->nom = $nom;
            $usuario->cognom = $cognom;
            $usuario->email = $email;
            $usuario->password = $password;

            // Guardar los cambios en la base de datos
            $usuario->save();

            // Redirigir a alguna vista o ruta después de la actualización
            return view('login.centre')
            ->with('email', $email)
            ->with('professors', $professors);
        } else {
            // Manejar el caso en que el usuario no se encuentra
            return redirect()->back()->with('error', 'Usuario no encontrado');
        }
    }

    public function delete($id)
    {
        $usuario = Usuaris::find($id);
    
        if ($usuario) {
            $usuario->delete();
            return redirect()->route('login.listaActualizada')->with('mensaje', 'Usuario eliminado correctamente');
        } else {
            return redirect()->back()->with('error', 'Usuario no encontrado');
        }
    }



    public function error()
    {
        return view('login.error');
    }

    public function datosUser()
    {
        $nom = request('nom');
        $cognom = request('cognom');
        $email = request('email');
        $password = request('password');

        return view('practica3.mostrarInfo')->with([
            'nom' => $nom,
            'cognom' => $cognom,
            'email' => $email,
            'password' => $password
        ]);
    }
}
