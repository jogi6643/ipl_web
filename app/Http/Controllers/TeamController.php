<?php

namespace App\Http\Controllers;

use App\Http\APIHandlers;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct()
    {
        $headers = [
            'Accept:application/json',
            // 'Authorization: Bearer ' . APIHandlers::get_token()
        ];

        // Teams News
        $response = APIHandlers::get_api_response('GET', config('bcciconfig.CURD_API_URL') . 'v1/menu/sponsors', $headers);
        $response = json_decode($response, true);
        if (!empty($response['status']) && $response['status'] == true) {
            $this->sponsors = $response['data'];
        } else {
            $this->sponsors = [];
        }
    }

    public function pointTable()
    {
         return view('points_table');
    }

    public function index()
    {

        $method = 'GET';
        $url = config('bcciconfig.CURD_API_URL') . 'v1/ipl_matches/web/teams/list';
        // $token = APIHandlers::get_token();
        $headers = [
            'Accept:application/json',
            // 'Authorization: Bearer ' . $token
        ];

        $response = APIHandlers::get_api_response($method, $url, $headers);
        $response_data = json_decode($response, true);
        dd($response_data);
        if (!empty($response_data['status'] == 'true') && $response_data['status'] == '200') {
            $response_data;
        } else {
            $response_data;;
        }

        return view('team.team_list', [
            'teamlist' => $response_data,
            // 'lang' => $language,
        ]);
    }

    public function TeamsPoint(Request $request)
    {
    //    dd($request->id);
        $method = 'GET';
        $url = config('bcciconfig.CURD_API_URL') . 'v1/menu/web/standing?type='.$request->id;
        // $token = APIHandlers::get_token();
        $headers = [
            'Accept:application/json',
            // 'Authorization: Bearer ' . $token
        ];

        $response = APIHandlers::get_api_response($method, $url, $headers);
        $response_data = json_decode($response, true);
        // dd($response_data);
        if (!empty($response_data['status'] == 'true') && $response_data['status'] == '200') {
            $data = $response_data['data'][0]['contents'];
        } else {
            $data = [];
        }
        if (!empty($data)) {
            return response()->json([
                'listhtml' => view('points.points', ['PointTable' => $data])->render(),
                'data'     => $response_data,
                'status'           => true,
                'status_code'      =>  200,
                'message'          => 'data get successfully',
            ], 200);
        } else {
            return response()->json([
                'status'           => false,
                'status_code'      =>  400,
                'message'          => 'data not avaliable',
            ], 200);
        }
        // return view('points_table', [
        //     'PointTable' => $data,
        // ]);
    }
    public function teams_overview($id = 1)
    {
        $method = 'GET';
        $url = config('bcciconfig.CURD_API_URL') . 'v1/ipl_matches/web/franchise/detail/' . $id;
        $headers = [
            'Accept:application/json',
        ];
        $response = APIHandlers::get_api_response($method, $url, $headers);
        $response_data = json_decode($response, true);
        // dd($response_data['data'][0]);

        if (!empty($response_data['status'] == 'true') && $response_data['status'] == '200') {
            $response_data;
        } else {
            $response_data;;
        }

        return view('teams_overview', [
            'teamoverview' => $response_data['data'][0]
        ]);
    }



    public function teams_results($id = 1)
    {

        $method = 'GET';
        $url = config('bcciconfig.CURD_API_URL') . 'v1/ipl_matches/web/results/?franchise_id=' . $id;
        $headers = [
            'Accept:application/json',
        ];
        $response = APIHandlers::get_api_response($method, $url, $headers);
        $response_data = json_decode($response, true);
        // dd($response_data['data']);

        if (!empty($response_data['status'] == 'true') && $response_data['status'] == '200') {
            $response_data;
        } else {
            $response_data;;
        }

        return view('teams_results', [
            'teamresult' => $response_data
        ]);
    }

    public function teams_home()
    {

        $method = 'GET';
        $url = config('bcciconfig.CURD_API_URL') . 'v1/ipl_matches/web/franchise/teams-list';
        $headers = [
            'Accept:application/json'
        ];

        $response = APIHandlers::get_api_response($method, $url, $headers);
        $response_data = json_decode($response, true);
        // dd($response_data);
        if (!empty($response_data['status'] == 'true') && $response_data['status'] == '200') {
            $response_data;
        } else {
            $response_data;;
        }

        return view('teams_home', [
            'teamdata' => $response_data
        ]);
    }



    public function news($id = 1)
    {
        $headers = [
            'Accept:application/json',
            // 'Authorization: Bearer ' . APIHandlers::get_token()
        ];

        // Teams News
        $response = APIHandlers::get_api_response('GET', config('bcciconfig.CURD_API_URL') . 'v1/ipl_articles/web/teamnews/' . $id, $headers);
        $response = json_decode($response, true);
        if (!empty($response['status']) && $response['status'] == true) {
            $teamNews = $response['data'];
        } else {
            $teamNews = [];
        }
        return view('team.teams_news', [
            'teamNews' => $teamNews,
            'sponsors' => $this->sponsors,
        ]);
    }

    public function teamsannouncement($id = 1){
        $id = request()->segment(2);
        $method = 'GET';
        $url = config('bcciconfig.CURD_API_URL').'v1/ipl_articles/app/teamnews/'. $id;
        // $token = APIHandlers::get_token();
        $headers = [
            'Accept:application/json',
            // 'Authorization: Bearer ' . $token
        ];
        
        $response = APIHandlers::get_api_response($method, $url, $headers);
        $response_data = json_decode($response, true);
        // dd($response_data);
        if (!empty($response_data['status']=='true') && $response_data['status'] == '200') {
            $response_data;
        } else {
            $response_data;;
        }
        // dd($response_data);
        return view('team.teamsannouncement', [
            'teamsannouncement' => $response_data,
            // 'lang' => $language,
        ]);
        // return view('home');
        // return view('team.teamsannouncement');
    }
}
