<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
           ['name' => 'Hrvatska', 'code' => 'HR'],
           ['name' => 'Slovenija', 'code' => 'SLO'],
           ['name' => 'Bosna', 'code' => 'BiH'],
        ]);
    }
}
