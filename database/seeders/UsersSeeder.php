<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'name' => 'Ana Albuquerque',
            'email' => 'ana.albuquerque@saude.gov.br',
            'password' => Hash::make('password'),
            'perfis_id' => 1,
        ],
        [
            'name' => 'Joice Silva',
            'email' => 'joice.silva@hsl.org.br',
            'password' => Hash::make('password'),
            'perfis_id' => 2,
        ]]);
    }
}
