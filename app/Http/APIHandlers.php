<?php

namespace App\Http;
use Exception;

class APIHandlers
{

    public static function get_api_response($method = 'GET', $url = null, $headers = [], $postdata = [], $url_encode = false)
    {
    //    dd($postdata);

        $curl = curl_init();
        $curl_array = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER => $headers,
        );

        if (!empty($postdata)) {
            if ($url_encode) {
                $postdata = urldecode(http_build_query($postdata));
            }
            $curl_array[CURLOPT_POSTFIELDS] = $postdata;
        }

        curl_setopt_array($curl, $curl_array);
        $response = curl_exec($curl);
       
        curl_close($curl);
        try{
            $result = json_decode($response,true);
            // print_r($response);die;
                if(isset($result['status']) && ($result['status'])=='true'){
                    return $response;
                }else if($result['status'] == false){
                    return $response;
                }else{
                    abort(404,"something went worng");
                }
        }
        catch(Exception $e){
            abort(404,"something went worng");
        }
    }

    public static function get_token()
    {
        $user_data = session('user_data') ?? null;
        return $user_data['token'] ?? null;
    }

}
