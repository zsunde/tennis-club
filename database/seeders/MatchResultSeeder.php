<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('match_results')->insert([
            ['match_id' => 1, 'winner_player_id' => 1, 'number_of_sets' => 3],
            ['match_id' => 2, 'winner_player_id' => 2, 'number_of_sets' => 3],
            ['match_id' => 3, 'winner_player_id' => 3, 'number_of_sets' => 3],  
        ]);    }
}
