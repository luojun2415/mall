<?php
namespace Mall\Controller;
use Think\Controller;
abstract class ThemeController extends Controller {	
	
	public function __construct() {
		parent::__construct();
		$this->initResource();
		$this->theme('default');
	}
	
	public function initResource() {
		$res = C('ASSIGN');
		if (is_array($res)) {
			foreach($res as $key => $value) {
				$this->{$key} = $value;
				$this->assign($key, $value);
			}
		}
	}
}