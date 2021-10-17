<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotivosReprovacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motivos_reprovacao')->insert([[
            'nome' => 'Manter na atenção primária',
        ],
        [
            'nome' => 'Informações Insuficientes',
        ],
        [
            'nome' => 'Outros',
        ]]);
    }
}