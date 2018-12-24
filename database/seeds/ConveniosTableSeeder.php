<?php

use Illuminate\Database\Seeder;

class ConveniosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Convenio::create([
            'nombre_empresa' => 'Apple',
            'tipo' => 'Capstone',
            'fecha_inicio' => '2000-05-03',
            'evidencia' => 'Evidencia',
            'duracion' => '5',
            'user_id' => '1'
        ]);
        App\Convenio::create([
            'nombre_empresa' => 'Microsoft',
            'tipo' => 'Marco',
            'fecha_inicio' => '2001-05-03',
            'evidencia' => 'Evidencia',
            'duracion' => '5',
            'user_id' => '2'
        ]);
        App\Convenio::create([
            'nombre_empresa' => 'Minera',
            'tipo' => 'A+S',
            'fecha_inicio' => '2000-05-03',
            'evidencia' => 'Evidencia',
            'duracion' => '4',
            'user_id' => '1'
        ]);
    }
}
