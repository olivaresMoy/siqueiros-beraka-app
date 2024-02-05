<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacione extends Model
{
    use HasFactory;

    protected $fillable = ['titulo','descripcion','role_id'];

    public function role(){
        return $this->belongsTo('App\Models\Role');
    }
}
