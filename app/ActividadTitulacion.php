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
        'empresa',
        'evidencia',
        'user_id',
        'convenio_id',
        'academico_id1',
        'academico_id2',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function convenio(){
        return $this->belongsTo(Convenio::class);
    }

    public function academico(){
        return $this->belongsTo(Academico::class);
    }
}
