<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadTitulacion extends Model
{
    protected $fillable = [
        'titulo_actividad',
        'nombre_estudiante',
        'rut_estudiante',
        'carrera_estudiante',
        'fecha_inicio',
        'fecha_termino',
        'profesor_guia',
        'empresa',
        'evidencia',
        'user_id',
        'convenio_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function convenio(){
        return $this->belongsTo(Convenio::class);
    }
}
