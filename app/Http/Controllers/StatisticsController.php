<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\APIHandlers;
use Illuminate\Http\Request;

class StatisticsController extends Controller{
    
    public function bySeason(Request $request, $season=2021, $sort='mostRuns'){
        
        $seasons = [2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014 ,2013, 2012, 2011, 2010, 2009, 2008, 2007];
        $team_id = $request->input('team');
        $player_type = $request->input('player_type');
        $season = ($request->has('season')) ? $request->input('season') : $season;
        //dd($request->has('season'), $request->input('season'), $season);
        $stats_type = 'batting';
        $headers = [
            'Accept:application/json',
            // 'Authorization: Bearer ' . APIHandlers::get_token()
        ];
        $postData = [
            'season' => $season,
            'sort' => $sort,
            'team_id' => $team_id,
            'stats_type' => $stats_type,
            'player_type' => $player_type
        ];
        $response = APIHandlers::get_api_response('POST', config('bcciconfig.CURD_API_URL').'v1/ipl_matches/web/stats', $headers, $postData, true);
        $response = json_decode($response, true);
        if (!empty($response['status']) && $response['status'] == true) {
            $statsData = $response['data']['batting'];
        } else {
            $statsData = [];
        }

        $response = APIHandlers::get_api_response('GET', config('bcciconfig.CURD_API_URL').'v1/ipl_matches/web/franchise/teams-list', $headers, $postData, true);
        $response = json_decode($response, true);
        if (!empty($response['status']) && $response['status'] == true) {
            $teamsData = $response['data']['men'];
        } else {
            $teamsData = [];
        }

        return view('stats.by-season', ['statsData' => $statsData, 'season' => $season, 'sort' => $sort, 'teamsData' => $teamsData, 'seasons' => $seasons]);
    }
}