<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// route for home page
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

// Route::get('/teams_home', [App\Http\Controllers\HomeController::class, 'teams_home']);
Route::get('/teams/men', [App\Http\Controllers\TeamController::class, 'teams_home']);

// Route::get('/stats/2021', [App\Http\Controllers\HomeController::class, 'leaderboard']);
Route::get('/stats/{season?}/{sort?}', [App\Http\Controllers\StatisticsController::class, 'bySeason'])->name('statsBySeason');

// Route::get('/teams_overview', [App\Http\Controllers\HomeController::class, 'teams_overview']);
Route::get('/teamsoverview/{id?}', [App\Http\Controllers\TeamController::class, 'teams_overview'])->name('teamsoverview');

Route::get('/home_match_start', [App\Http\Controllers\HomeController::class, 'home_match_start']);

Route::get('/leaderboard_inner', [App\Http\Controllers\HomeController::class, 'leaderboard_inner']);

Route::get('/teams_result_hawkeye', [App\Http\Controllers\HomeController::class, 'teams_result_hawkeye']);

Route::get('/teams_result_match_videos', [App\Http\Controllers\HomeController::class, 'teams_result_match_videos']);

Route::get('/teams_result_photos', [App\Http\Controllers\HomeController::class, 'teams_result_photos']);

Route::get('/teams_result_playing_teams', [App\Http\Controllers\HomeController::class, 'teams_result_playing_teams']);

Route::get('/teams_result_videos_all', [App\Http\Controllers\HomeController::class, 'teams_result_videos_all']);

//Route::get('/teams_result_schedule', [App\Http\Controllers\HomeController::class, 'teams_result_schedule']);

Route::get('/photos', [App\Http\Controllers\HomeController::class, 'about_photo_gallery']);

Route::get('/about/code-of-conduct-for-players-and-team-officials', [App\Http\Controllers\HomeController::class, 'aboutus']);

Route::get('/aboutus_form', [App\Http\Controllers\HomeController::class, 'aboutus_form']);

Route::get('/stats/all-time', [App\Http\Controllers\HomeController::class, 'leaderboard_all_timerecord']);

Route::get('/pointstable', [App\Http\Controllers\TeamController::class, 'pointTable']);
Route::post('/pointstableData', [App\Http\Controllers\TeamController::class, 'TeamsPoint']);
// Route::get('/pointstable', [App\Http\Controllers\HomeController::class, 'points_table']);

Route::get('/statistics_player', [App\Http\Controllers\HomeController::class, 'statistics_player']);

Route::get('/teams/stats', [App\Http\Controllers\HomeController::class, 'statistics_team']);

// Route::get('/teams_archive', [App\Http\Controllers\HomeController::class, 'teams_archive']);
Route::get('/teamsarchive/{id?}', [App\Http\Controllers\ArchiveController::class, 'index']);
Route::get('/teams-archive-full-archive/{year?}/{id?}', [App\Http\Controllers\ArchiveController::class, 'teams_archive_full_archive']);
// Route::get('/teams_archive_full_archive', [App\Http\Controllers\HomeController::class, 'teams_archive_full_archive']);

Route::get('/teams_individual', [App\Http\Controllers\HomeController::class, 'teams_individual']);
// Route::get('/team/news/{id?}', [App\Http\Controllers\TeamController::class, 'news']);
Route::get('/teamnews/{id?}', [App\Http\Controllers\TeamController::class, 'news']);

Route::get('/teamsannouncement/{id?}', [App\Http\Controllers\TeamController::class, 'teamsannouncement']);
// Route::get('/teams_news_individual_announcement', [App\Http\Controllers\HomeController::class, 'teams_news_individual_announcement']);

Route::get('/teams_result_overview', [App\Http\Controllers\HomeController::class, 'teams_result_overview']);

Route::get('/teams_result_scorecard', [App\Http\Controllers\HomeController::class, 'teams_result_scorecard']);

Route::get('/teamsresults/{id?}', [App\Http\Controllers\TeamController::class, 'teams_results']);

// Route::get('/teams_results', [App\Http\Controllers\HomeController::class, 'teams_results']);

//Route::get('/teams_schedule', [App\Http\Controllers\HomeController::class, 'teams_schedule']);

Route::get('/teams_results_report', [App\Http\Controllers\HomeController::class, 'teams_results_report']);

//Route::get('/teams_schedule_match_details', [App\Http\Controllers\HomeController::class, 'teams_schedule_match_details']);

Route::get('/teams_squad', [App\Http\Controllers\HomeController::class, 'teams_squad']);

Route::get('/teams_result_match_video_pop', [App\Http\Controllers\HomeController::class, 'teams_result_match_video_pop']);

Route::get('/post_auction', [App\Http\Controllers\HomeController::class, 'post_auction']);

Route::get('/videos_press_conferences', [App\Http\Controllers\HomeController::class, 'videos_press_conferences']);

Route::get('/about_venues', [App\Http\Controllers\HomeController::class, 'about_venues']);

Route::get('/about_venues_inner', [App\Http\Controllers\HomeController::class, 'about_venues_inner']);

Route::get('/videos_magic_moments', [App\Http\Controllers\HomeController::class, 'videos_magic_moments']);

Route::get('/about_photos_onematch', [App\Http\Controllers\HomeController::class, 'about_photos_onematch']);

Route::get('/videos_interviews', [App\Http\Controllers\HomeController::class, 'videos_interviews']);

Route::get('/teamssquad/{id?}', [App\Http\Controllers\SquadlistController::class, 'index']);

// Route::get('videopage','\App\Http\Controllers\videopageController@videopage');

Route::get('/teams_result_schedule/{id?}', [App\Http\Controllers\TeamScheduleController::class, 'teams_result_schedule']);

Route::get('/teams_schedule_match_details', [App\Http\Controllers\TeamScheduleController::class, 'teams_schedule_match_details']);



//team-result route
Route::get('/team-result', [App\Http\Controllers\TeamResultController::class, 'index']);
Route::post('/team-result-data', [App\Http\Controllers\TeamResultController::class, 'team_result']);
//team-result route end

Route::get('/aboutus_drop2', [App\Http\Controllers\HomeController::class, 'aboutus_drop2']);

Route::get('/aboutus_form_drop2', [App\Http\Controllers\HomeController::class, 'aboutus_form_drop2']);

Route::get('/news_individual_announcement', [App\Http\Controllers\HomeController::class, 'news_individual_announcement']);

Route::get('/news_all', [App\Http\Controllers\HomeController::class, 'news_all']);

Route::get('/statistics_team_filter', [App\Http\Controllers\HomeController::class, 'statistics_team_filter']);

Route::get('/points_table_filter', [App\Http\Controllers\HomeController::class, 'points_table_filter']);

Route::get('/teams_schedule_filter', [App\Http\Controllers\HomeController::class, 'teams_schedule_filter']);

Route::get('/teams_results_filter', [App\Http\Controllers\HomeController::class, 'teams_results_filter']);

Route::get('/teams_archive_full_archive_filter', [App\Http\Controllers\HomeController::class, 'teams_archive_full_archive_filter']);

Route::get('/leaderboardinner_filter', [App\Http\Controllers\HomeController::class, 'leaderboardinner_filter']);
