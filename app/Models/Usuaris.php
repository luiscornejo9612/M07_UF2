<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//hola
class Usuaris extends Model
{
    use HasFactory;
    protected $table = 'usuaris';
    protected $fillable = [
        'id',
        'nom',
        'cognom',
        'email',
        'password',
        'rol'
    ];
}
