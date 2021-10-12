<?php


ini_set("display_errors",true);
/*
 * Print the information/data/json/array/anything in readble format
 */
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

function CurlAPI($context,$method='GET',$data=null){ 
	if(empty($context)) return;
	return ApiHelper::api($context,$method,$data);
}


?>