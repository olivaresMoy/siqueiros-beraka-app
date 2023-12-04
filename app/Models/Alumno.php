<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = ['user_id','grupo_id','tutore_id'];

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
