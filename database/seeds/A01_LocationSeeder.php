<?php

use Illuminate\Database\Seeder;

class A01_LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert(['short_name' => 'Doomben', 'name' => 'Doomben Racecourse', 'city' => 'Doomben']);
        DB::table('locations')->insert(['short_name' => 'Eagle Farm', 'name' => 'Eagle Farm Racecourse', 'city' => 'Eagle Farm']);
        DB::table('locations')->insert(['short_name' => 'Flemington', 'name' => 'Flemington Racecourse', 'city' => 'Flemington']);
        DB::table('locations')->insert(['short_name' => 'Albion Park', 'name' => 'Albion Park Raceway', 'city' => 'Albion']);
    }
}


