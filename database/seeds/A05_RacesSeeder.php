<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class A05_RacesSeeder extends Seeder
{

    private const MIN_RACES_PER_MEETING  =  1;


    private const MAX_RACES_PER_MEETING  =  10;


    private const ELAPSE_TIME_FOR_RACE   =  100;


    private const DELAY_BETWEEN_RACES    =  50;


    private const DELAY_RACE_START       =  50;



    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Get a list of all meetings
        $meetings = DB::table('meetings')->get();

        // Counter can also help to offset some time
        $counter = 0;

        foreach ($meetings as $meeting)
        {
            $counter++;

            $this->createEvents($meeting, $counter);
        }
    }



    /**
     * Creates muliple races per meeting
     * 
     * @param  [type] $meeting [description]
     * @return [type]          [description]
     */
    private function createEvents($meeting, $counter)
    {
        // Time Delay per race
        $time_delay = $counter * 1.14;


        $number_of_races = mt_rand(self::MIN_RACES_PER_MEETING, self::MAX_RACES_PER_MEETING);

        for($race_no = 1; $race_no <= $number_of_races; $race_no++)
        {
            // add some relevant elapse time
            $time_delay += self::ELAPSE_TIME_FOR_RACE + self::DELAY_BETWEEN_RACES;

            $this->createEvent($race_no, $meeting, $time_delay, $counter);  
        }
        
    }



    /**
     * Create a specific race
     * 
     * @param  int    $race_no [description]
     * @param  [type] $meeting [description]
     * @return [type]          [description]
     */
    private function createEvent(int $race_no, $meeting, $time_delay, $counter)
    {
        DB::table('races')->insert(
            [
                'race_no' => $race_no,
                'type_id' => $meeting->type_id,
                'meeting_id' => $meeting->id,
                'bet_closing_time' => Carbon::now()->addSeconds($time_delay),
                'race_start_time' => Carbon::now()->addSeconds(($time_delay + self::DELAY_RACE_START)),
            ]
        );
    }
}
