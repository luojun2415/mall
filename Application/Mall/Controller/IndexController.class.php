<?php
namespace Mall\Controller;
use Mall\Controller\Base\AuthController;

class IndexController extends AuthController {
	
	function index() {
		$this->assign('title', '首页');
		
		$advModel = D('Advertise');
		
		$advs = $advModel->GetList(1, 3, $this->user->enterpriseId);
		
		if (!$advs) {
			$advs = $advModel->getList(1, 3);
		}
		$this->assign('advs', $advs);

		$this->display();
	}
	
}