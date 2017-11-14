<?php

use Illuminate\Database\Seeder;

class A04_MeetingsSeeder extends Seeder
{



    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = DB::table('types')->get();
        $locations = DB::table('locations')->get();

        // 
        // Manually assign the tracks 
        // to the approprite type
        // 
        $this->createMeeting($types->where('name', 'Greyhounds')->first(), 
            $locations->where('city', 'Albion')->first());

        $this->createMeeting($types->where('name', 'Harness')->first(), 
            $locations->where('city', 'Albion')->first());

        $this->createMeeting($types->where('name', 'Thoroughbreds')->first(), 
            $locations->where('city', 'Doomben')->first());

        $this->createMeeting($types->where('name', 'Thoroughbreds')->first(), 
            $locations->where('city', 'Eagle Farm')->first());

        $this->createMeeting($types->where('name', 'Thoroughbreds')->first(), 
            $locations->where('city', 'Flemington')->first());
 

    }

    private function createMeeting($type, $location)
    {
        DB::table('meetings')->insert(
            [
                'type_id' => $type->id,
                'location_id' => $location->id,
            ]
        );
    }
}
