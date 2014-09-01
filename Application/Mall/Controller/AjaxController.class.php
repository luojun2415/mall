<?php
namespace Mall\Controller;
use Mall\Controller\AuthController;

abstract class AjaxController extends AuthController {	
	
	public function __construct() {
		if (IS_AJAX) {
			parent::__construct();
		} else {
			exit;
		}
	}
}