<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titulado extends Model
{
    protected $fillable = [
        'nombre_titulado',
        'rut_titulado',
        'telefono',
        'correo_electronico',
        'empresa',
        'anio_titulacion',
        'carrera_estudiante',
        'evidencia',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
