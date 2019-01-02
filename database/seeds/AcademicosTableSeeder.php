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
            'nombre_academico' => 'Jose Peña',
            'rut_academico' => '181280778'
        ]);

        App\Academico::create([
            'nombre_academico' => 'Maikel Carvajal',
            'rut_academico' => '193977901',
        ]);

        App\Academico::create([
            'nombre_academico' => 'Carlos Pon',
            'rut_academico' => '123456789',
        ]);

        App\Academico::create([
            'nombre_academico' => 'Vianca Vega',
            'rut_academico' => '987654321',
        ]);
    }
}
