<?php

namespace App\Http\Controllers;

use DB;
use View;
use App\Race;
use App\Location;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    /**
     * Load the initial 5 races
     */
    public function index() {    

        if($races = Race::getNextFive())
            $view = View::make('ajax.list-item', ['races' => $races]);
        else
            $view = View::make('ajax.list-item', ['races' => []]);

        $payload = $view->render(); 

        return view('pages.index')->withPayload($payload);   
    }
}
