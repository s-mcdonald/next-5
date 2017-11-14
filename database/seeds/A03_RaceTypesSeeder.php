<?php

use Illuminate\Database\Seeder;

class A03_RaceTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Thoroughbreds',
            'Greyhounds',
            'Harness'
        ];

        foreach($types as $type)
        {
            DB::table('types')->insert(
                [
                    'name' => $type,
                ]
            );
        }
    }
}
