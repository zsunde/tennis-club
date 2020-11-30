<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courts')->insert([
            ['name' => 'Court1'],
            ['name' => 'Court2'],
            ['name' => 'Court3'],
        ]);
    }    
}
