<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContadorRegistro extends Model
{
    protected $fillable = [
        'contador_convenio',
        'contador_extension',
        'contador_aprendizaje_servicio',
        'contador_actividad_titulacion',
        'contador_titulado'
    ];

    public $timestamps = false;
    protected $table = 'contador_registros';
}
