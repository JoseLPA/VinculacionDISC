<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AprendizajeServicio extends Model
{
    protected $fillable = [
        'nombre_asignatura',
        'nombre_profesor',
        'cantidad_estudiantes',
        'nombre_socio',
        'semestre',
        'año',
        'evidencia',
        'user_id',
        'asignatura_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function convenios(){
        return $this->belongsToMany(Convenio::class);
    }

    public function asignatura(){
        return $this->belongsTo(Asignatura::class);
    }
}
