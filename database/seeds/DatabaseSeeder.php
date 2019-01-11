<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AcademicosTableSeeder::class);
        $this->call(AsignaturasTableSeeder::class);
        $this->call(ConveniosTableSeeder::class);
        $this->call(Actividad_ExtensionesTableSeeder::class);
        $this->call(Aprendizaje_ServiciosTableSeeder::class);
        $this->call(TituladosTableSeeder::class);
        $this->call(ActividadTitulacionTableSeeder::class);
        $this->call(ContadorRegistroTableSeeder::class);

    }
}
