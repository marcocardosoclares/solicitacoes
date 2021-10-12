<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfis')->insert([[
            'nome' => 'Médico de Família',
        ],
        [
            'nome' => 'Médico Regulador',
        ]]);
    }
}
