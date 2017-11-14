<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Location;
use App\Race;
use View;


class HomeController extends BaseController
{
    /**
     * Load the initi8al 5 races
     * All subsequent races will be changed via Api.
     * 
     * @return [type] [description]
     */
    public function index()
    {    

        if($races = Race::getNextFive())
            $view = View::make('ajax.list-item', ['races' => $races]);
        else
            $view = View::make('ajax.list-item', ['races' => []]);

        $payload = $view->render(); 


        return view('pages.index')->withPayload($payload);   
    }

}
