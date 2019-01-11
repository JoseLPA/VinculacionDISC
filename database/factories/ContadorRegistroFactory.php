<?php

use Faker\Generator as Faker;

$factory->define(App\ContadorRegistro::class, function (Faker $faker) {
    return [
        'contador_convenio',
        'contador_extension',
        'contador_aprendizaje_servicio',
        'contador_actividad_titulacion',
        'contador_titulado',
    ];
});