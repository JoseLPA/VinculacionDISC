<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadExtension extends Model
{
    protected $fillable = [
        'titulo_actividad',
        'nombre_expositor',
        'fecha',
        'ubicacion',
        'cantidad_asistentes',
        'organizador_actividad',
        'evidencia',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function convenios(){
        return $this->belongsToMany(Convenio::class);
    }

    public function academicos(){
        return $this->belongsToMany(Academico::class);
    }
}
