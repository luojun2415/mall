<?php
namespace Mall\Controller\Main;
use Mall\Controller\AuthController;

class IndexController extends AuthController {
	
	function index() {
		$this->assign('title', '首页');
		$this->display();
	}
	
}