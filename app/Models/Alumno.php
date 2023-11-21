<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function tutore(){
        return $this->belongsTo('App\Models\Tutore');
    }
    public function grupo(){
        return $this->belongsTo('App\Models\Grupo');
    }
}
