<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('set_results')->insert([
            ['match_id' => 1, 'set_number' => 1, 'player1_games' => 6, 'player2_games' => 3],
            ['match_id' => 1, 'set_number' => 2, 'player1_games' => 4, 'player2_games' => 6],
            ['match_id' => 1, 'set_number' => 3, 'player1_games' => 6, 'player2_games' => 1],
        ]);
    }
}
