<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function grupo(){
        return $this->belongsTo('App\Models\Grupo');
    }
    public function asignaturas(){
        return $this->hasMany('App\Models\Asignatura');
    }
}
