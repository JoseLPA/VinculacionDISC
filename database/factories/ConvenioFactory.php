<?php

use Faker\Generator as Faker;

$factory->define(App\Convenio::class, function (Faker $faker) {
    return [
        'nombre_empresa',
        'tipo',
        'fecha_inicio',
        'evidencia',
        'duracion',
        'user_id',
    ];
});
