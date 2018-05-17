<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    //
    protected $fillable = [
        'matricula', 'nombre', 'paterno','materno','email'
    ];
}
