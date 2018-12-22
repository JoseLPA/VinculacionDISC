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
            'tipo' => 'No se',
            'fecha_inicio' => '2000-05-03',
            'evidencia' => 'Evidencia',
            'duracion' => '5',
            'user_id' => '1'
        ]);
    }
}
