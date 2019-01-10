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
            'nombre_asignatura' => 'Ingenieria de software'
        ]);

        App\Asignatura::create([
            'nombre_asignatura' => 'Base de datos'
        ]);

        App\Asignatura::create([
            'nombre_asignatura' => 'Programación'
        ]);

        App\Asignatura::create([
            'nombre_asignatura' => 'Redes'
        ]);
    }
}
