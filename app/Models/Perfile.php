<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfile extends Model
{
    use HasFactory;

    public function notificacione(){
        return $this->hasMany('App\Models\Notificaciones');
    }
}
