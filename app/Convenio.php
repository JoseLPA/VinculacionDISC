<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $fillable = [
        'nombre_empresa',
        'tipo',
        'fecha_inicio',
        'evidencia',
        'duracion',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function actividadesExtension(){
        return $this->belongsToMany(ActividadExtension::class);
    }

    public function aprendizajeServicios(){
        return $this->belongsToMany(AprendizajeServicio::class);
    }

    public function actividadTitulacion(){
        return $this->belongsTo(ActividadTitulacion::class);
    }
}
