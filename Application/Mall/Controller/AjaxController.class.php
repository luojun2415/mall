<?php
namespace Mall\Controller;

abstract class ThemeController extends AuthController {	
	
	public function __construct() {
		if (IS_AJAX) {
			parent::__construct();
		} else {
			exit;
		}
	}
}