<?php

use Illuminate\Database\Seeder;

class AsignaturasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Asignatura::create([
            'nombre_asignatura' => 'Ingeniería de software I'
        ]);

        App\Asignatura::create([
            'nombre_asignatura' => 'Ingeniería de software II'
        ]);

        App\Asignatura::create([
            'nombre_asignatura' => 'Base de datos'
        ]);

        App\Asignatura::create([
            'nombre_asignatura' => 'Programación'
        ]);

        App\Asignatura::create([
            'nombre_asignatura' => 'Programación Avanzada'
        ]);

        App\Asignatura::create([
            'nombre_asignatura' => 'Redes'
        ]);

        App\Asignatura::create([
            'nombre_asignatura' => 'Diseño Sistemas Digitales'
        ]);

        App\Asignatura::create([
            'nombre_asignatura' => 'Estructura de datos'
        ]);

        App\Asignatura::create([
            'nombre_asignatura' => 'Análisis de algoritmos'
        ]);

        App\Asignatura::create([
            'nombre_asignatura' => 'Sistema de información I'
        ]);

        App\Asignatura::create([
            'nombre_asignatura' => 'Sistemas Operativos'
        ]);
    }
}
