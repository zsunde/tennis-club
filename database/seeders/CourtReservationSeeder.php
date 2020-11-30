<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CourtReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('court_reservation')->insert([
            ['started_at' => Carbon::yesterday(), 'finished_at' =>  now(), 'court_id' => 2, 'member_id' => 1],
            ['started_at' =>  Carbon::yesterday(), 'finished_at' =>  now(), 'court_id' => 1, 'member_id' => 2],
            ['started_at' =>  Carbon::yesterday(), 'finished_at' =>  now(), 'court_id' => 3, 'member_id' => 3],
        ]);}    
}
