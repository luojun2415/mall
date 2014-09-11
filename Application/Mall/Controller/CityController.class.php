<?php 
namespace Mall\Controller;
use Mall\Controller\Base\AuthController;

class CityController extends AuthController {
	//获取城市信息
	public function Choose(){
		
		$cityModel = D('City');		
		
		$result = $cityModel->ChooseCities();
		if($result) {
			$this->assign('cities', $result);
			$this->view->display();
		}
	}
}