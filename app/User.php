<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','rut', 'rol', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function actividadesExtension(){
        return $this->hasMany(ActividadExtension::class);
    }

    public function aprendizajeServicios(){
        return $this->hasMany(AprendizajeServicio::class);
    }

    public function convenios(){
        return $this->hasMany(Convenio::class);
    }

    public function actividadesTitulaciones(){
        return $this->hasMany(ActividadTitulacion::class);
    }

    public function titulados(){
        return $this->hasMany(Titulado::class);
    }
}
