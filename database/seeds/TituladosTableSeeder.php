<?php

use Illuminate\Database\Seeder;

class TituladosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Titulado::create([
            'nombre_titulado' => 'José Luis Peña Arcos',
            'rut_titulado' => '181280778',
            'telefono' => '50820489',
            'correo_electronico' => 'jose.l.p.arcos@gmail.com',
            'empresa' => 'Banco Estado',
            'anio_titulacion' => '2018',
            'carrera_estudiante' => 'Ingeniería en informatica',
            'evidencia' => 'http://homestead.test/evidencia/GcY5Bq6o1hwQxsXi7TQ6fb4Byk6pBTHQAL1jiHbK.pdf',
            'user_id' => '3'
        ]);

        App\Titulado::create([
            'nombre_titulado' => 'Maikel Jordan Carvajal Ortiz',
            'rut_titulado' => '193977901',
            'telefono' => '12345678',
            'correo_electronico' => 'mjcarvajal@gmail.com',
            'empresa' => 'Nintendo',
            'anio_titulacion' => '2018',
            'carrera_estudiante' => 'Ingeniería en informatica',
            'evidencia' => 'http://homestead.test/evidencia/GcY5Bq6o1hwQxsXi7TQ6fb4Byk6pBTHQAL1jiHbK.pdf',
            'user_id' => '3'
        ]);
    }
}
