<?php

namespace App\Http\Controllers;

use DB;
use View;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Location;
use App\Race;


class RaceController extends BaseController
{

    public function index(Race $race)
    {
        $message = '';

        if($race->competitors->count() < 4) {
            //cancel race

            $message = 'Race has been cancelled due to not enough competitors';
            $view = View::make('ajax.status-warn', ['message' => $message]);
            $message = $view->render(); 

        }

        return view('pages.race')->withRace($race)->withMessage($message);   
    }




}
