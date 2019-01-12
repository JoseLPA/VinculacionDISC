<?php

use Illuminate\Database\Seeder;

class ContadorRegistroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\ContadorRegistro::create([
            'contador_convenio' => '3',
            'contador_extension' => '3',
            'contador_aprendizaje_servicio' => '2',
            'contador_actividad_titulacion' => '0',
            'contador_titulado' => '2'
        ]);
    }
}
