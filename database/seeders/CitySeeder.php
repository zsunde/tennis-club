<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['name' => 'Zagreb', 'country_id' => 1],
            ['name' => 'Maribor', 'country_id' => 2],
            ['name' => 'Sarajevo', 'country_id' => 3],
        ]);
    }
}
