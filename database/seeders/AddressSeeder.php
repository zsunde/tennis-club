<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            ['street' => 'Street 1', 'city_id' => 1],
            ['street' => 'Street 2', 'city_id' => 2],
            ['street' => 'Street 3', 'city_id' => 3],
        ]);}
}
