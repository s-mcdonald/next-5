<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(A01_LocationSeeder::class);
        $this->call(A02_CompetitorSeeder::class);
        $this->call(A03_RaceTypesSeeder::class);
        $this->call(A04_MeetingsSeeder::class);
        $this->call(A05_RacesSeeder::class);
        $this->call(A06_RacesCompetitors::class);
    }
}
