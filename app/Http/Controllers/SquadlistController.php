<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\APIHandlers;

class SquadlistController extends Controller{


    public function index($id = 1){
        $method = 'GET';
        $url = config('bcciconfig.CURD_API_URL').'v1/ipl_matches/web/squadlist/'. $id;
        $headers = [
            'Accept:application/json'
        ];
        
        $response = APIHandlers::get_api_response($method, $url, $headers);
        $response_data = json_decode($response, true);
        
        if (!empty($response_data['status']=='true') && $response_data['status'] == '200') {
            $response_data;
        } else {
            $response_data;
        }
        // dd($response_data['data'][0]);
        return view('teams_squad', [
            'teamssquad' => $response_data['data'][0],
            // 'lang' => $language,
        ]);
    }

}