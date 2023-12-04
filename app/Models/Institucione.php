<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucione extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','cct','zona','telefono','direccion','director','ciclo'];

    public function niveles(){
        return $this->hasMany('App\Models\Nivele');
    }
}
