<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspecialidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('especialidades')->insert([[
            'nome' => 'Cardiologia',
        ],
        [
            'nome' => 'Endocrinologia',
        ],
        [
            'nome' => 'Ortopedia',
        ],
        [
            'nome' => 'Reumatologia',
        ]]);
    }
}