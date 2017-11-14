<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class A06_RacesCompetitors extends Seeder
{

    private const MAX_COMPETITOR_COUNT_PER_RACE = 8;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // foreach race
        //      get list of available competitors
        //      - each race 
        //              - must have at least 4 or 6 competitors 
        //              - 2 races can have 3 competitors to signal game to cancel race
        //      
        //      == Create row raci_id competior set position to n


        $types = DB::table('types')->get();


        foreach ($types as $type)
        {
            // get the race char code for competitor array
            $char = strtolower(substr($type->name,0,1));

            $races = DB::table('races')->where('type_id',$type->id)->get();

            // Get the competitor for that type of race
            $competitors = DB::table('competitors')->where('type_char', $char)->get();
            
            // ensure there is no double ups in our dummy data
            // To make the data-set seem more realistic data 
            // is shuffled so each refresh is unique.
            $competitors  = $competitors->shuffle()->unique();

            foreach ($races as $race)
            {
                // set the counter, 
                // no more than 10 competitors per race
                $current_competitor_count = 0;

                // get the first 4-8 competitors
                while(($current_competitor_count <= self::MAX_COMPETITOR_COUNT_PER_RACE
                         && $competitors->count() > self::MAX_COMPETITOR_COUNT_PER_RACE))
                {
                    $players = $competitors->splice(0,mt_rand(4, self::MAX_COMPETITOR_COUNT_PER_RACE - 1));

                    $position = 1;

                    // Create a race by meeting type
                    foreach ($players as $player) 
                    {
                        // make race 22 only have 2 competitors
                        if(($race->id == 22) && ($position <= 3) ||
                            ($race->id !== 22)) {

                            DB::table('races_has_competitors')->insert(
                                [
                                    'race_id'           => $race->id,
                                    'competitor_id'     => $player->id,
                                    'position'          => $position,
                                    'position_final'    => 0,
                                ]
                            );

                            $position++;
                            $current_competitor_count++;
                        }



                    }

                    break;
                }
            }
        }

    }
}
