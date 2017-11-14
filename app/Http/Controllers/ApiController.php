<?php

namespace App\Http\Controllers;

use DB;
use View;
use Carbon\Carbon;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use App\Race;
use App\Location;

class ApiController extends BaseController
{

    /**
     * gets the server time
     * 
     */
    public function getTime() {

        $msg = Carbon::now()->format('h:i:s');

        return $msg;
    }

    /**
     * request for the next5.
     * This checks to see if it needs an update
     */
    public function nextFive(Request $request) {

        if($request->action == 'refresh')
        {
            return $this->refresh();
        }

        if(($request->id))
        {
            if(! Race::isActive($request->id)) {

                return $this->refresh();
            }
        }

        return $this->sendResponse('nochange');
    }


    /**
     * Refresh the next5
     * @return [type] [description]
     */
    private function refresh() {

        if($races = Race::getNextFive())
            $view = View::make('ajax.list-item', ['races' => $races]);
        else
            $view = View::make('ajax.list-item', ['races' => []]);

        $payload = $view->render(); 

        return $this->sendResponse('update', $payload);
    }

    /**
     * Returns the response and Server time.
     * 
     * @param  string $status  [description]
     * @param  string $payload [description]
     * @return [type]          [description]
     */
    private function sendResponse(string $status = 'update', $payload = '') {

        $time       = Carbon::now()->format('h:i:s');

        return json_encode([
            'status'=> $status, 
            'payload' => $payload,
            'time' => $time, 
        ]);
    }
}
