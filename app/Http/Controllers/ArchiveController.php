<?php

namespace App\Http\Controllers;
use App\Http\APIHandlers;

class ArchiveController extends Controller
{
    public function index($id = 1){
        
        $method = 'GET';
        $url = config('bcciconfig.CURD_API_URL').'v1/ipl_matches/web/archive/'.$id;
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
        return view('teams_archive', [
            'teamlist' => $response_data,
        ]);
        
        // return view('teams_archive');
    }
    public function teams_archive_full_archive($year,$id){
        $method = 'GET';
        $url = config('bcciconfig.CURD_API_URL').'v1/ipl_matches/web/results?year='.$year.'&franchise_id='.$id;
        $headers = [
            'Accept:application/json',
        ];
        $response = APIHandlers::get_api_response($method, $url, $headers);
        $response_data = json_decode($response, true);
        // dd($response_data);
        if (!empty($response_data['status']=='true') && $response_data['status'] == '200') {
            $response_data;
        } else {
            $response_data;;
        }
        return view('teams_archive_full_archive', [
            'team_archive' => $response_data,
        ]);
         
    }
}
