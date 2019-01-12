<?php

use Illuminate\Database\Seeder;

class AcademicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Academico::create([
            'nombre_academico' => 'Juan Bekios Calfa',
            'rut_academico' => '222333444'
        ]);

        App\Academico::create([
            'nombre_academico' => 'Nathal Dawson Díaz',
            'rut_academico' => '111222999',
        ]);

        App\Academico::create([
            'nombre_academico' => 'Carlos Pon Soto',
            'rut_academico' => '123456789',
        ]);

        App\Academico::create([
            'nombre_academico' => 'Vianca Vega Zepeda',
            'rut_academico' => '187654321',
        ]);

        App\Academico::create([
            'nombre_academico' => 'Victor Manuel Flores',
            'rut_academico' => '12122343',
        ]);

        App\Academico::create([
            'nombre_academico' => 'Jose Gallardo Arancibia',
            'rut_academico' => '12863591',
        ]);

        App\Academico::create([
            'nombre_academico' => 'Brian Keith Norambuena',
            'rut_academico' => '17651925',
        ]);

        App\Academico::create([
            'nombre_academico' => 'German Morales Loyola',
            'rut_academico' => '16251927',
        ]);

        App\Academico::create([
            'nombre_academico' => 'Manuel Olivares Avila',
            'rut_academico' => '187362592',
        ]);

        App\Academico::create([
            'nombre_academico' => 'Diego Urrutia Astorga',
            'rut_academico' => '14625192',
        ]);

        App\Academico::create([
            'nombre_academico' => 'Claudio Meneses Villegas',
            'rut_academico' => '18372610',
        ]);
    }
}
