<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
           'name' => 'Jose Peña',
            'rut' => '18128077-8',
            'email' => 'jose@email.com',
            'password' => bcrypt('123')
        ]);
    }
}
