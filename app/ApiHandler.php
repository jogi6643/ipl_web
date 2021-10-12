<?php
namespace App;
use Illuminate\Support\Facades\Log;
class ApiHandler
{
	public $url;
	public $header;
	private $ch;
	private $pch;
	public function __construct()
	{
		$this->header = $this->getHeader();
		if((! $this->ch) || empty($this->ch)){
			$this->ch = curl_init();	
		}
		if((! $this->pch) || empty($this->pch)){
			$this->pch = curl_init();	
		}
	}

	public function getHeader(){
		$headerArr[] = "x-access-auth-token: ".config('bcciconfig.EPICAPI.API_AUTH_TOKEN');

		$headerArr[] = "Content-Type: application/x-www-form-urlencoded";
		$headerArr[] = "cache-control: no-cache";
		if(env('APP_ENV')!='local' || env('APP_ENV')!='LOCAL'){
			$clientip = (!empty($_SERVER['HTTP_TRUE_CLIENT_IP'])) ? $_SERVER['HTTP_TRUE_CLIENT_IP'] : ((!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) ? explode(",",$_SERVER['HTTP_X_FORWARDED_FOR'])[0] : '');
			$headerArr[] =  "HTTP_X_CCORG: ".(!empty($_SERVER['HTTP_X_CCORG']) ? $_SERVER['HTTP_X_CCORG'] : '');
			$headerArr[] =  "HTTP_TRUE_CLIENT_IP: ".$clientip;
		}
		return $headerArr;
	}

	public function api_query($context,$method='GET',$data=null){
		$url = config('bcciconfig.EPICAPI.API_DOMAIN').'v2/'.$context.'/';
		// $url = "https://dev-njsapi.epicon.in/v2/".$context;
		$querystring = $fields_string ='';
		if($method=='POST'){
			if($data!= null && !empty($data)){
				$fields_string = http_build_query($data);
     		}

			$this->api_url = $url;
			return $this->PostCurlToApi($fields_string);
		} else {
			$this->api_url = ($data!= null && !empty($data)) ? $url."?".$this->preparePostFields($data) : $url;
			return $this->GetCurlToApi();
		}
	}


	public function api_query_without_v2($context,$method='GET',$data=null){
		// $url = config('epicconfig.EPICAPI.API_DOMAIN').''.$context.'/';
		$url = config('epicconfig.EPICAPI.API_DOMAIN').''.$context;
		Log::info("-----URL:".$url."----");		
		$querystring = $fields_string ='';
		if(!empty($_SERVER['HTTP_X_REGION'])){
			$data['x_country'] = $_SERVER['HTTP_X_REGION'];
		}
		if(!empty($_SERVER['HTTP_X_CONTINENT'])){
			$data['x_continent'] = $_SERVER['HTTP_X_CONTINENT'];	
		}
		if($data['x_country']=='RoW'){
			$data['x_country'] = $_SERVER['HTTP_X_CONTINENT'];
		}
		if($method=='POST'){
			if($data!= null && !empty($data)){
				$fields_string = http_build_query($data);
			}
			$this->api_url = $url;
			return $this->PostCurlToApi($fields_string);
		} else {
			$this->api_url = ($data!= null && !empty($data)) ? $url."?".$this->preparePostFields($data) : $url;
			return $this->GetCurlToApi();
		}
	}	

	public function GetCurlToApi(){
		Log::info("-----Method:GET-----URL:".$this->api_url);
		curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, "GET");
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($this->ch, CURLOPT_URL, $this->api_url);
		curl_setopt($this->ch, CURLOPT_AUTOREFERER, 1);
		//curl_setopt($this->ch, CURLOPT_FRESH_CONNECT, 1);
        curl_setopt($this->ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, $this->header);
		//curl_setopt($this->ch, CURLINFO_HEADER_OUT, true);	
		$getresult = curl_exec($this->ch);
		$curlhttpcode = curl_getinfo($this->ch, CURLINFO_HTTP_CODE);
		//$headerout = curl_getinfo($this->ch,CURLINFO_HEADER_OUT);		
		$curl_error = curl_error($this->ch);
		$curl_errno = curl_errno($this->ch);
		//Log::info("-----Curl Header:".$headerout."------");
		if ($curl_errno > 0) {
			Log::info("-----curl errorno:".$curl_errno);
			return false;
		} else{
			$apiresponse = json_decode($getresult,true);
			$apilog = ((!empty($apiresponse) && $apiresponse!=null) ? $apiresponse['success'] : null);
			Log::info("-----curl API response success param:".$apilog."------message:".$apiresponse['message']);
			return $apiresponse;
		}		
	}

	public function PostCurlToApi($fields_string){
		Log::info("-----Method:POST-----URL:".$this->api_url."-----Data:".$fields_string);
		curl_setopt($this->pch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($this->pch, CURLOPT_POST, true);
		if(!empty($fields_string)){
			curl_setopt($this->pch, CURLOPT_POSTFIELDS,$fields_string);	
		}
		curl_setopt($this->pch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($this->pch, CURLOPT_URL, $this->api_url);
		curl_setopt($this->pch, CURLOPT_AUTOREFERER, 1);
		//curl_setopt($this->pch, CURLOPT_FRESH_CONNECT, 1);
        curl_setopt($this->pch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($this->pch, CURLOPT_HTTPHEADER, $this->header);
        //curl_setopt($this->pch, CURLINFO_HEADER_OUT, true);	
		$postresult = curl_exec($this->pch);
		$curlhttpcode = curl_getinfo($this->pch, CURLINFO_HTTP_CODE);

		dd($this->pch);

		/*if (strpos($this->api_url,'pages/midpages') !== false) {
			Log::info("-----Curl Result:".json_encode($postresult));
		}*/
		//$headerout = curl_getinfo($this->pch,CURLINFO_HEADER_OUT);		
		$curl_error = curl_error($this->pch);
		$curl_errno = curl_errno($this->pch);
		//Log::info("-----Curl Header:".$headerout."------");
		if ($curl_errno > 0) {
			Log::info("-----curl errorno:".$curl_errno);
			return false;
		} else{
			$postapiresponse = json_decode($postresult,true);
			$postapilog = ((!empty($postapiresponse) && $postapiresponse!=null) ? $postapiresponse['success'] : null);
			Log::info("-----curl API response success param:".$postapilog."------message:".$postapiresponse['message']);
			return $postapiresponse;
		}
	}

	public function preparePostFields($array) {
		  $params = array();
		  foreach ($array as $key => $value) {
		    $params[] = $key . '=' . urlencode($value);
		  }
		  return implode('&', $params);
	}
}
global $api_client;
$api_client = new ApiHandler(); 