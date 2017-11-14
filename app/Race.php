<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Race extends Model
{
    
    /**
     * Get the top5 available Races
     * 
     * @return
     */
    public static function getNextFive()
    {
        $now = Carbon::now();

        return Race::where('bet_closing_time', '>', $now )
            ->orderBy('bet_closing_time')
            ->limit(5)
            ->get();
    }


    /**
     * Checks if a given race by its ID is Active
     * 
     * @param  [type]  $id [description]
     * @return boolean     [description]
     */
    public static function isActive($id)
    {
        $now = Carbon::now();

        $race = Race::where('id', $id )->first();

        if($race->bet_closing_time < $now) {
            return false;
        }

        return true;
    }

    /**
     * Not used.
     * 
     * @param  [type] $array [description]
     * @return [type]        [description]
     */
    public static function getNextFiveWhereNotIn($array)
    {
        $now = Carbon::now();

        return Race::where('bet_closing_time', '>', $now )
            ->whereNotIn('id', $array)
            ->orderBy('bet_closing_time')
            ->limit(5)
            ->get();
    }


    /**
     * Get the Meeting that belongs to the Race
     * 
     */
    public function meeting()
    {
        return $this->belongsTo('App\Meeting');
    }


    /**
     * Get the Competitors for the race,
     * This is through the pivot table.
     * 
     * - withPivot() allows for access 
     *   to the other pivotTable fields
     */
    public function competitors()
    {
        return $this->belongsToMany('App\Competitor', 'races_has_competitors', 'race_id', 'competitor_id')
                    ->withPivot('position')
                    ->withPivot('position_final');
    }
}
