<?php
namespace Mall\Controller;
use Mall\Controller\AuthController;

class IndexController extends AuthController {
	
	function index() {
		$this->assign('title', '首页');
		$this->display();
	}
	
}