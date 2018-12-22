<?php

use Faker\Generator as Faker;

$factory->define(App\ActividadExtension::class, function (Faker $faker) {
    return [
        'titulo_actividad' => $faker->text(10),
        'nombre_expositor',
        'fecha',
        'ubicacion',
        'cantidad_asistentes',
        'organizador_actividad',
        'evidencia',
        'user_id',

    ];
});
