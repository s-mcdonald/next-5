<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    //
    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function type()
    {
        return $this->belongsTo('App\Type');
    }
}
