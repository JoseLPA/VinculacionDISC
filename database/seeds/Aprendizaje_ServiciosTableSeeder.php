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
            'cantidad_estudiantes' => '29',
            'nombre_socio' => 'UCN',
            'semestre' => '2',
            'año' => '2018',
            'evidencia' => 'http://homestead.test/evidencia/GcY5Bq6o1hwQxsXi7TQ6fb4Byk6pBTHQAL1jiHbK.pdf',
            'user_id' => '2',
            'asignatura_id' => '2',
        ]);

        App\AprendizajeServicio::create([
            'cantidad_estudiantes' => '10',
            'nombre_socio' => 'UCN',
            'semestre' => '1',
            'año' => '2018',
            'evidencia' => 'http://homestead.test/evidencia/GcY5Bq6o1hwQxsXi7TQ6fb4Byk6pBTHQAL1jiHbK.pdf',
            'user_id' => '1',
            'asignatura_id' => '1'
        ]);
    }
}
