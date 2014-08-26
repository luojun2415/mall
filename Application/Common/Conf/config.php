<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_TEMPLATE_SUFFIX' => '.tpl',
	'DEFAULT_MODULE' => 'Mall',

	'AUTOLOAD_NAMESPACE' => array(
			'Lib'     => COMMON_PATH . 'Lib',
	),
	'LOG_TYPE' => 'File',
	
	'TMPL_ENGINE_TYPE' => 'Lib\Smarty\Smarty',
	'TMPL_ENGINE_CONFIG' => array(
		'plugins_dir' => array(COMMON_PATH . 'Lib/Smarty/plugins'),
		'template_dir' => 'res/template',
		'config_dir' => 'res/config',
	),
);