<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call([
            PerfisSeeder::class,
            UsersSeeder::class,
            EspecialidadesSeeder::class,
            MotivosReprovacaoSeeder::class,
            StatusSeeder::class
        ]);
    }
}
