<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'institucione_id',
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function institucione(){
        return $this->belongsTo('App\Models\Institucione');
    }
    public function perfile(){
        return $this->hasOne('App\Models\Perfile');
    }
    public function tutore(){
        return $this->hasOne('App\Models\Tutore');
    }
    public function alumno(){
        return $this->hasOne('App\Models\Alumno');
    }
    public function docente(){
        return $this->hasOne('App\Models\Docente');
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
}