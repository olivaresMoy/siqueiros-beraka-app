<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfile extends Model
{
    protected $fillable = ['nombre','apaterno','amaterno','celular','sexo','role_id','user_id'];

    use HasFactory;
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function role(){
        return $this->belongsTo('App\Models\Role');
    }
}
