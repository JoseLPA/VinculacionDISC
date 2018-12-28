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
            'titulo_actividad' => 'Expo UCN',
            'nombre_expositor' => 'Juan',
            'fecha' => '2018-12-20',
            'ubicacion' => 'UCN',
            'cantidad_asistentes' => '100',
            'organizador_actividad' => 'Pedro',
            'evidencia' => 'http://homestead.test/evidencia/GcY5Bq6o1hwQxsXi7TQ6fb4Byk6pBTHQAL1jiHbK.pdf',
            'user_id' => '1',
        ]);

        App\ActividadExtension::create([
            'titulo_actividad' => 'Seminario de emprendimiento',
            'nombre_expositor' => 'Nicole',
            'fecha' => '2018-12-24',
            'ubicacion' => 'UCN',
            'cantidad_asistentes' => '20',
            'organizador_actividad' => 'Nicole',
            'evidencia' => 'http://homestead.test/evidencia/GcY5Bq6o1hwQxsXi7TQ6fb4Byk6pBTHQAL1jiHbK.pdf',
            'user_id' => '1',
        ]);

        App\ActividadExtension::create([
            'titulo_actividad' => 'Charla de robotica',
            'nombre_expositor' => 'Dayana',
            'fecha' => '2018-12-20',
            'ubicacion' => 'UCN',
            'cantidad_asistentes' => '30',
            'organizador_actividad' => 'José',
            'evidencia' => 'http://homestead.test/evidencia/GcY5Bq6o1hwQxsXi7TQ6fb4Byk6pBTHQAL1jiHbK.pdf',
            'user_id' => '2',
        ]);
    }
}
