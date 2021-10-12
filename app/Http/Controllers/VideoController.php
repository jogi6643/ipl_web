<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Route;
use Response;

class VideoController extends Controller{
    //

    public function index(){
        return view('video');
    }

    // function to run ajax player for video
    public function ajaxplayer()
    {
        $request = Request();
        $postData = $request->post();

        $user_id = $session_id = '';

        if ($postData['action'] == 'st') {
            $cid = $postData['cid'];
            $type = isset($postData['type']) ? $postData['type'] : 'video';
            $type = strtoupper($type);
            $epicwebArr = CurlAPI("contents/playurl", "POST", ["user_id" => $user_id, "session_id" => $session_id, "content_id" => $cid, "type" => $type]);
            return Response::json(json_encode($epicwebArr));
        }
        if ($postData['action'] == 'ch') {
            $cid = $postData['cid'];
            $dur = $postData['dur'];
            $epicwebArr = CurlAPI("users/setplaystatus", "POST", ["user_id" => $user_id, "session_id" => $session_id, "content_id" => $cid, "duration" => $dur]);
            return $epicwebArr;
        }
    }

    public function bcciChat(){
        return view('bcci_chat');
    }
}
