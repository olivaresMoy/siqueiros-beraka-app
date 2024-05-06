<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{

    protected $fillable = ['nombre','docente_id','grupo_id'];

    use HasFactory;

    public function grupos() {
        return $this->belongsToMany('App\Models\Grupo');
    }
    public function docente(){
        return $this->belongsTo('App\Models\Docente');
    }
    public function asistencias(){
        return $this->hasMany('App\Models\Asistencia');
    }
    public function calificaciones(){
        return $this->hasMany('App\Models\Calificacione');
    }
    public function reportes(){
        return $this->hasMany('App\Models\Reporte');
    }
    public function tareas(){
        return $this->hasMany('App\Models\Tarea');
    }

}
