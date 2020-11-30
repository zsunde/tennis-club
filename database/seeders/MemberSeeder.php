<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            ['name' => 'Pero Peric', 'email' => 'pero@gmail.com', 'password' => 'pass1', 'gender' => 'M', 'role_id' => 1, 'address_id' => 1],
            ['name' => 'Ante Antic', 'email' => 'ante@gmail.com', 'password' => 'pass2', 'gender' => 'M', 'role_id' => 1, 'address_id' => 2],
            ['name' => 'Stipe Stipic', 'email' => 'stipe@gmail.com', 'password' => 'pass3', 'gender' => 'M', 'role_id' => 2, 'address_id' => 3],
        ]);

    }
}
