<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class AcademicoAprendizajeServicio extends Model
{

    /*
	 * Se establece el NO uso de los timestamps
	 * Se redefine el nombre de la tabla en la base de datos
	 * Se definen los atributos permitidos en asignacion masiva
	 */
    public $timestamps = false;
    protected $table = 'academico_aprendizaje_servicio';
}