<?php

use Illuminate\Database\Seeder;

class Aprendizaje_ServiciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\AprendizajeServicio::create([
            'nombre_asignatura' => 'Ingenieria de software',
            'nombre_profesor' => 'Vianca',
            'cantidad_estudiantes' => '29',
            'nombre_socio' => 'UCN',
            'semestre' => '2',
            'año' => '2018',
            'evidencia' => 'Hola',
            'user_id' => '1'
        ]);
    }
}