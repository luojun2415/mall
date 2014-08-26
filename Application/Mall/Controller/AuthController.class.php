<?php

namespace Mall\Controller;

use Mall\Controller\ThemeController;
use Lib\XFMemcache;

abstract class AuthController extends ThemeController {
	protected $user;
	protected $cityId;
	
	
	function __construct() {
		parent::__construct ();
		if (! $this->isLogin ()) {
			$this->redirect ( '/Mall/Login/Index' );
		} else {
			$theme = $this->getTheme($this->user->enterpriseId);
			if ($theme) {
				$this->theme($theme);
			}
			$this->cityId = $this->getCurCity();
			
			$cityModel = D('City');
			
			$cities = $cityModel->GetCities();

			$this->assign('areaName', $cities[$this->cityId]);
			$this->assign('cities', $cities);
		}
	}
	/**
	 * 获取企业配置的主题
	 * @param unknown $enterpriseId
	 * @return unknown
	 */
	function getTheme($enterpriseId) {
		$themeNode = C('THEME');
		$configTheme = $themeNode['default'];
		
		$config = $themeNode['config'];
		
		if ($config && is_array($config)) {
			foreach($config as $theme) {
				if (isset($theme['name']) && isset($theme['enterprise'])) {
					$enterprise = $theme['enterprise'];
					if (is_array($enterprise)) {
						if (in_array($enterpriseId, $enterprise)) {
							$configTheme = $theme['name'];
						} else if ($enterprise == $enterpriseId) {
							$configTheme = $theme['name'];
						}
					}
				}
			}
		}
		
		return $configTheme;
	}
	
	function getCurCity() {
		$curCities = 1;
		if(I('cookie.AreaID')){
			$curCities = I('cookie.AreaID');
		}else{
			if(!is_numeric($curCities) || $curCities <= 0){
				$curCities =1;
				setcookie('AreaID', 1, time()+2592000,'/');
		
			}
		}
		
		return $curCities;
	}
	
	function isLogin() {
		$cookieId =  I ( 'cookie.' . COOKIE_KEY ) ;
		if (isset ($cookieId)) {
			$sessionKey = $cookieId . EMPLOYEE_NO;
			$userNameKey = $cookieId . USERNAME;
			$phoneLoginKey = $cookieId . PHONE_LOGIN; // 获得手机号
			
			$enterpriseKey = $cookieId . ENTERPRISE_NO;
			$ydSystemKey = $cookieId . YDSYSTEM_NO;
			$enterpriseIdKey = $cookieId . ENTERPRISE_ID;
			$shopCartKey = $cookieId . SHOPCART_NO;
			
			$sessionValue = XFMemcache::getMemValue ( $sessionKey );

			if (! $sessionValue)
				return false;
			$enterpriseValue = XFMemcache::getMemValue ( $enterpriseKey );
			if (! $enterpriseValue)
				return false;
				
				// 预定系统
			$ydSystemValue = XFMemcache::getMemValue ( $ydSystemKey );
			if (! $ydSystemKey)
				return false;
			
			$cart = array ();
			$shopCartValue = XFMemcache::getMemValue ( $shopCartKey );
			if ($shopCartValue) {
				// 购物车
				$cart = json_decode ( $shopCartValue );
				$count = 0;
				foreach ( $cart->CartItemList as $item ) {
					$count += $item->Count;
				}
			} else {
				$count = 0;
			}
			
			$enterpriseIdValue = XFMemcache::getMemValue ( $enterpriseIdKey );
			$userNameValue = XFMemcache::getMemValue ( $userNameKey );
			$phoneNumber = XFMemcache::getMemValue ( $phoneLoginKey );
			
			if ($userNameValue == false) {
				$userNameValue = '';
			}
			
			// 获取
			$partitionNo = XFMemcache::getMemValue ( $cookieId . ENTERPRISE_PARTITION_NO );
			$getPower = XFMemcache::getMemValue ( $cookieId . USER_POWER );
			$data = array (
					'key' => $enterpriseValue,
					'name' => trim ( $userNameValue ),
					'enterpriseId' => $enterpriseIdValue,
					'userName' => trim($userNameValue),
					'loginPhone' => $phoneNumber,
					'paycarCount' => $count,
					'enterprisePartitionNo' => $partitionNo,
					'reserveCardNo' => $ydSystemValue,
					'getPower' => $getPower
			);				
			$this->user = (object)$data;
			$this->assign('user', $this->user);
			
			return true;
		}
		
		return false;
	}
}