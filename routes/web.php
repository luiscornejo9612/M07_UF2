<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\SignController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Email;
use App\Models\Usuaris;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/getName', function () {
//     return "HELLO WORD";
// });

// Route::get('/hola/{id}', function ($id) {
//     return "Hello".$id;
// });


// Route::get('/sign/signup/{p1}', function ($p1) {
//     return "Hola ".$p1;
// });

// Route::get('/sign/signin/{inici}/{secion}/{de}/{usuari}', [SignController::class, 'signin']);

// Route::get('/sign/signup/{creacio}/{usuari}/{nom}', [SignController::class, 'signup']);


/*Route::get('/login', function(){

});*/


//PRÁCTICA 2 VISTES
Route::post('/login', [loginController::class, 'login'])->middleware('test');
Route::get('/errorAcces',[loginController::class, 'error']) ->name('errorAcces');

/*Route::get('/error', function (){
    return "Error d’accés";
}) -> name ('errorAcces.index');
*/

//hola
//PRÁCTICA 3 VISTES
Route::get('/sigin', [SignController::class, 'signInPractica3'])->name('sigin');
Route::get('/sigup', [SignController::class, 'signUpPractica3'])->name('sigup');
Route::post('/mostrarInfo', [loginController::class, 'singup']) -> middleware('test');

//CRUD alumnes
Route::get('/editAlumnes/{id}', [loginController::class, 'editAlumnes'])->name('editAlumnes');
Route::put('/updateAlumnes/{id}', [loginController::class, 'updateAlumnes'])->name('updateAlumnes');
Route::delete('/deleteAlumnes/{id}', [loginController::class, 'deleteAlumnes'])->name('deleteAlumnes');
Route::get('/añadirUserAlumne', [loginController::class, 'añadirUserAlumne'])->name('añadirUserAlumnes');
Route::post('/añadirAlumnes', [loginController::class, 'añadirAlumnes'])->name('añadirAlumnes');


//CRUD professors
Route::get('/editProfessor/{id}', [loginController::class, 'editProfessor'])->name('editProfesso');
Route::put('/updateProfessor/{id}', [loginController::class, 'updateProfessor'])->name('updateProfessor');
Route::delete('/deleteProfessor/{id}', [loginController::class, 'deleteProfessor'])->name('deleteProfessor');
Route::get('/añadirUser', [loginController::class, 'añadirUser'])->name('añadirUser');
Route::post('/añadirProfessor', [loginController::class, 'añadirProfessor'])->name('añadirProfessor');






// Route::post('/login', function(){
// $email = Request('email');
// $password = Request('password');
// return `El meu Email es`. $email . 'y el password es'. $password;
// });

// Route::post('/login', function(){
//     $email = 'luisalvarado338@gmail.com';
//     return view('login.alumne')-> with('variable', `hola`);
// }) -> name('user');