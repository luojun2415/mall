<?php 
namespace Mall\Controller\Api;
use Mall\Controller\AjaxController;
class CityController extends AjaxController {
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