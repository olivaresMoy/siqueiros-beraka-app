<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    
    public function alumnos(){
        return $this->hasMany('App\Models\Alumno');
    }
    public function docente(){
        return $this->hasOne('App\Models\Docente');
    }
    public function nivele(){
        return $this->belongsTo('App\Models\Nivele');
    }
    public function asignaturas() {
    	return $this->belongsToMany('App\Models\Asignatura');
    }
}