<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class Tipos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo')->insert([
            'nombre_tipo' => 'Cliente'
        ]);
          DB::table('tipo')->insert([
            'nombre_tipo' => 'Usuario'
        ]);
    }
}
