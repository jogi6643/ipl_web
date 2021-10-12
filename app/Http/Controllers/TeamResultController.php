<?php

namespace App\Http\Controllers;

use App\Http\APIHandlers;
use Illuminate\Http\Request;

class TeamResultController extends Controller
{
    public function index()
    {
        return view('team_result.teamResultParent');
    }

    public function team_result(Request $request)
    {
        $url_encode = true;
        $method = 'GET';
        $url = config('bcciconfig.CURD_API_URL') . 'v1/ipl_matches/web/franchise/team-results/overview';

        $headers = [
            'Content-Type:application/x-www-form-urlencoded'
        ];

        $postData = [
            "matchId"  => '3',
        ];

        $response = APIHandlers::get_api_response($method, $url, $headers, $postData, $url_encode);
        $response_data = json_decode($response, true);
        if (!empty($response_data['status'] == true)) {
//   dd($response_data);

            return response()->json([
                'bannerhtml'    => view('team_result.banner', ['data' => $response_data, 'status' => true])->render(),
                'scoreCard'     => view('team_result.scorecard', ['data' => $response_data, 'status' => true])->render(),
                'data'          => $response_data,
                'status'        => true,
                'status_code'   =>  200,
                'message'       => 'data get successfully',
            ], 200);
        } else {
            return response()->json([
                'status'        => false,
                'status_code'   =>  400,
                'message'       => 'data not avaliable',
            ], 200);
        }
    }
}
