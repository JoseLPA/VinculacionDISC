<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academico extends Model
{
    protected $fillable = [
        'nombre_academico',
        'rut_academico',
    ];

    public function actividadesExtension(){
        return $this->belongsToMany(ActividadExtension::class);
    }

    public function asignaturas(){
        return $this->belongsToMany(Asignatura::class);
    }
}
