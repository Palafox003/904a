<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    //
    protected $fillable = [
        'matricula', 'nombre', 'paterno','materno','email','user_id','programa_id'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function programa(){
    	return $this->belongsTo('App\Programa');
    }
}
