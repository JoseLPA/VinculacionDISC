<?php

use Faker\Generator as Faker;

$factory->define(App\AprendizajeServicio::class, function (Faker $faker) {
    return [

        'nombre_asignatura',
        'nombre_profesor',
        'cantidad_estudiantes',
        'nombre_socio',
        'semestre',
        'año',
        'evidencia',
        'user_id',

    ];
});
