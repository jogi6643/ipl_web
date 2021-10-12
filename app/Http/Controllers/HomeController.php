<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\APIHandlers;

class HomeController extends Controller{
    public function index(){
        $headers = [
            'Accept:application/json',
            // 'Authorization: Bearer ' . APIHandlers::get_token()
        ];

        // Home Sections
        $response = APIHandlers::get_api_response('GET', config('bcciconfig.CURD_API_URL').'v1/pages/web/home', $headers);
        $response = json_decode($response, true);
        if (!empty($response['status']) && $response['status'] == true) {
            $homeData = $response['pageData'];
        } else {
            $homeData = [];
        }

        return view('home_match_start', ['homeData' => $homeData]);
    }

    public function teams_home(){
        return view('teams_home');
    }

    public function leaderboard(){
        return view('leaderboard');
    }
    
    public function teams_overview(){
        return view('teams_overview');
    }
    
    public function home_match_start(){
        return view('home', ['data' => []]);
    }
    
    public function leaderboard_inner(){
        return view('leaderboard_inner');
    }
    
    public function teams_result_hawkeye(){
        return view('teams_result_hawkeye');
    }
    
    public function teams_result_match_videos(){
        return view('teams_result_match_videos');
    }
    
    public function teams_result_photos(){
        return view('teams_result_photos');
    }
    
    public function teams_result_playing_teams(){
        return view('teams_result_playing_teams');
    }
    
    public function teams_result_videos_all(){
        return view('teams_result_videos_all');
    }
    
    public function teams_result_schedule(){
        return view('teams_result_schedule');
    }
    
    public function about_photo_gallery(){

        $method = 'GET';
        $url = config('bcciconfig.CURD_API_URL').'v1/ipl_photos/web?tag=gallery-photo';
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

        return view('about_photo_gallery', [
            'photolist' => $response_data,
        ]);

        // return view('about_photo_gallery');
    }
    
    public function aboutus(){
        return view('aboutus');
    }
    
    public function aboutus_form(){
        return view('aboutus_form');
    }
    
    public function leaderboard_all_timerecord(){
        return view('leaderboard_all_timerecord');
    }
    
    public function points_table(){
        return view('points_table');
    }
    
    public function statistics_player(){
        return view('statistics_player');
    }
    
    public function statistics_team(){
        return view('statistics_team');
    }
    
    public function teams_archive(){
        return view('teams_archive');
    }
    
    public function teams_archive_full_archive(){
        return view('teams_archive_full_archive');
    }
    
    public function teams_individual(){
        return view('teams_individual');
    }
        
    public function teams_news_individual_announcement(){
        return view('teams_news_individual_announcement');
    }
    
    public function teams_result_overview(){
        return view('teams_result_overview');
    }
    
    public function teams_result_scorecard(){
        return view('teams_result_scorecard');
    }
    
    public function teams_schedule(){
        return view('teams_schedule');
    }
    
    public function teams_results(){
        return view('teams_results');
    }
    
    public function teams_results_report(){
        return view('teams_results_report');
    }
    
    public function teams_schedule_match_details(){
        return view('teams_schedule_match_details');
    }
    
    // public function teams_squad(){
    //     return view('teams_squad');
    // }

    public function teams_result_match_video_pop(){
        return view('teams_result_match_video_pop');
    }

    public function post_auction(){
        return view('post_auction');
    }

    public function videos_press_conferences(){
        return view('videos_press_conferences');
    }

    public function about_venues(){
        return view('about_venues');
    }

    public function about_venues_inner(){
        return view('about_venues_inner');
    }

    public function videos_magic_moments(){
        return view('videos_magic_moments');
    }

    public function about_photos_onematch(){
        return view('about_photos_onematch');
    }

    public function videos_interviews(){
        return view('videos_interviews');
    }

    public function aboutus_drop2(){
        return view('aboutus_drop2');
    }

    public function aboutus_form_drop2(){
        return view('aboutus_form_drop2');
    }

    public function news_individual_announcement(){
        return view('news_individual_announcement');     
    }

    public function news_all(){
        return view('news_all');
    }

    public function statistics_team_filter(){
        return view('statistics_team_filter');
    }

    public function points_table_filter(){
        return view('points_table_filter');
    }

    public function teams_schedule_filter(){
        return view('teams_schedule_filter');
    }

    public function teams_results_filter(){
        return view('teams_results_filter');
    }

    public function teams_archive_full_archive_filter(){
        return view('teams_archive_full_archive_filter');
    }

    public function leaderboardinner_filter(){
        return view('leaderboardinner_filter');
    }

}