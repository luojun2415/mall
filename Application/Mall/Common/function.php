<?php
use Lib\HTTP\Client;
use Think\Log;
//function.php会自动加载，在这里引入需要加载的文件
include 'common.php'; //常量定义

if (!function_exists('getCgiData')) {
	function getCgiData($interface, $getParams = array(), $postParams = array()) {
		$url = C($interface);
		
		if ($getParams) {
			array_unshift($getParams, $url);
			$url = call_user_func_array('sprintf', $getParams);
		}
		Log::record('hello');
		Log::save();
		$instance = Client::getInstance();
	
		$instance->setOption(CURLOPT_USERAGENT, I('server.HTTP_USER_AGENT'));
		if ($postParams) {
			$instance->post($url, $postParams);
		} else {
			$instance->get($url);
		}
	
		$cgiResult = json_decode($instance->getBody());
		
		$result = new stdClass();
		
		$result->success = true;
		
		$result->code =  '200';
		
		$result->msg = '';
		
		$result->data = null;
		
		if ($cgiResult) {
			if ($result->code == $cgiResult->Ret) {
				$result->data = $cgiResult->Data;
			} else {
				$result->success = false;
				$result->code = $cgiResult->Ret;
				if (isset($cgiResult->Data) && isset($cgiResult->Msg)) {
					$result->msg = $cgiResult->Msg;
					$result->data = $cgiResult->Data;
				} else if(isset($cgiResult->Msg)) {
					$result->msg = $cgiResult->Msg;
				} else if (isset($cgiResult->Data)) {
					$result->msg = $cgiResult->Data;
				}
			}
		} else {
			$result->success = false;
			$result->code = '';
			$result->msg = '接口返回为空';
		}
		
		return $result;
	}
}