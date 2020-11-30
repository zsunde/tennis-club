<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matches')->insert([
            ['player1_id' => 1, 'player2_id' =>  2, 'played_at' => now()],
            ['player1_id' => 2, 'player2_id' =>  3, 'played_at' => now()],
            ['player1_id' => 1, 'player2_id' =>  3, 'played_at' => now()],
        ]);
    }    
}
