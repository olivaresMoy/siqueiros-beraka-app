<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivele extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','institucione_id'];
    
    public function grupos(){
        return $this->hasMany('App\Models\Grupo');
    }
    public function institucione(){
        return $this->belongsTo('App\Models\Institucione');
    }
}
