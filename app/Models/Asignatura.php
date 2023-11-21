<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    public function docente(){
        return $this->belongsTo('App\Models\Docente');
    }
    public function tareas(){
        return $this->hasMany('App\Models\Tarea');
    }
    public function grupos() {
    	return $this->belongsToMany('App\Models\Grupo');
    }
}
