<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CountrySeeder::class,
            RoleSeeder::class,
            CourtSeeder::class,
            CitySeeder::class,
            AddressSeeder::class,
            MemberSeeder::class,
            CourtReservationSeeder::class,
            MatchSeeder::class,
            SetResultSeeder::class,
            MatchResultSeeder::class,
        ]);
    }
}
