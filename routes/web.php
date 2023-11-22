<?php

use App\Http\Controllers\SignController;
use Illuminate\Support\Facades\Route;

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

Route::get('/getName', function () {
    return "HELLO WORD";
});

Route::get('/hola/{id}', function ($id) {
    return "Hello".$id;
});


Route::get('/sign/signup/{p1}', function ($p1) {
    return "Hola ".$p1;
});

Route::get('/sign/signin/{inici}/{secion}/{de}/{usuari}', [SignController::class, 'signin']);

Route::get('/sign/signup/{creacio}/{usuari}/{nom}', [SignController::class, 'signup']);

