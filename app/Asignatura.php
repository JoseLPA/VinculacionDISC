<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $fillable = [
        'nombre_asignatura',
    ];

    public function academicos(){
        return $this->belongsToMany(Academico::class);
    }

    public function aprendizajeServicios(){
        return $this->hasMany(AprendizajeServicio::class);
    }
}
