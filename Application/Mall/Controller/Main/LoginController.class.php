<?php

namespace Mall\Controller\Main;
use Mall\Controller\ThemeController;
use Lib\Vcode;

class LoginController extends ThemeController {
	function Index() {
		$this->display ();
	}
	function LoginCheck() {
		$userName = I ( 'username' );
		$password = I ( 'password' );
		$code = I ( 'validatecode' );
		$data ['originUrl'] = I ( 'originUrl' );
		// 生成xf_sid;
		$sessionId = uniqid () . time ();	
		setcookie ( COOKIE_KEY, $sessionId, time () + 2592000, '/');
		if ($code != $_SESSION ['code']) {
			$this->assign('errMsg' , '验证码错误！');
			$this->display ('index');
		} else {
			if (trim ( $userName ) == '' || trim ( $password ) == '' || trim ( $sessionId ) == '') {
				$this->assign('errMsg' , '用户名或密码错误！');
				$this->display ( 'index' );
			} else {
				$result = getCgiData('login', array (
						'userNo' => trim ( $userName ) , 
				), array (
						'password' => urlencode ( trim ( $password ) ),
						'SessionID' => urlencode ( trim ( $sessionId ) ) 
				), false );
				var_dump($result);
				$result = $result->data;
				if (isset ( $result->Url )) {
					if ($data ['originUrl']) {
						header ( 'Location:' . $data ['originUrl'] ); // 如果有来源URL，则回去原URL
					} else {
						//header ( 'Location:' . $result->Url ); // 进入mall首页
						header('Location: ' .  $this->get('baseUrl'));
					}
				}
				if (isset ( $result->ErrorMsg )) {
					$this->assign('errMsg', $result->ErrorMsg);
				}
				if (isset ( $result->UserNo )) {
					$this->assign('userNo', trim($result->UserNo));
				}
				
				$this->display('index');
			}
		}
	}
	
	/**
	 * 获取验证码
	 */
	public function GetCode() {
		$array = array (
				'width' => 90,
				'height' => 41,
				'codeNum' => 5,
				'fontPath' => "CoasterShadow.ttf" 
		);
		
		$vcode = new Vcode ( $array );
		$vcode->putCode ();
	}
}