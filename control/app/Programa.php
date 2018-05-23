<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Estudiante;

class Programa extends Model
{
    //
    protected $fillable=[
    	'id','numero','nombre','logo'
    ];

    public function estudiantes()
    {
        return $this->hasMany('App\Estudiante');
    }
}
