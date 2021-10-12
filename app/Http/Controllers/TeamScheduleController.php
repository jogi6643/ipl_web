<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\APIHandlers;

class TeamScheduleController extends Controller
{
    //

    public function teams_result_schedule($id){

        $method_team_list = 'GET';
        $url_team_list = config('bcciconfig.CURD_API_URL').'v1/ipl_matches/web/franchise/teams-list';
        // $token = APIHandlers::get_token();
        $headers = [
            'Accept:application/json',
            // 'Authorization: Bearer ' . $token
        ];
        
        $response_team_list = APIHandlers::get_api_response($method_team_list, $url_team_list, $headers);
        $response_data_list = json_decode($response_team_list, true);
    	
       
        $id_team  =array();
        foreach($response_data_list['data']['men'] as $team_id){
            $id_team = $team_id['id'];

            $method = 'GET';
            $url    =config('bcciconfig.CURD_API_URL').'v1/ipl_matches/web/teamSchedule/'.$id_team;
            
            $headers = [
                'Accept:application/json',
            ];
            
            $response = APIHandlers::get_api_response($method, $url, $headers);

            //dd($response);
             $response_data = json_decode($response, true);
             if (!empty($response_data['status']=='true') && $response_data['status'] == '200') {
                $response_data;
            } else {
                $response_data;
            }

        }
        return view('teams_result_schedule',['response_data'=> $response_data]);
    }

    public function teams_schedule_match_details(){
        
            $id_team = 3;
            $method = 'GET';
            $url    =config('bcciconfig.CURD_API_URL').'v1/ipl_matches/web/teamSchedule/'.$id_team; 
            $headers = [
                'Accept:application/json',
            ];
            
            $response = APIHandlers::get_api_response($method, $url, $headers);
             $response_data = json_decode($response, true);
             if (!empty($response_data['status']=='true') && $response_data['status'] == '200') {
                $response_data;
            } else {
                $response_data;
            }
        return view('teams_schedule_match_details',['team_schedule'=>$response_data]);
    }


  }  