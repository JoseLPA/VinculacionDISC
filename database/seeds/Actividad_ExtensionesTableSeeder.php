<?php

use Illuminate\Database\Seeder;

class Actividad_ExtensionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\ActividadExtension::create([
            'titulo_actividad' => 'Hola',
            'nombre_expositor' => 'Juan',
            'fecha' => '2018-12-20',
            'ubicacion' => 'UCN',
            'cantidad_asistentes' => '100',
            'organizador_actividad' => 'Yo',
            'evidencia' => 'Evidencia',
            'user_id' => '1',
        ]);
    }
}
