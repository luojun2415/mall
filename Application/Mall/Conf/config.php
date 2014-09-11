<?php
return array (
		// '配置项'=>'配置值'
		'LOAD_EXT_CONFIG' => 'cgi,graypublish,theme,flow',
		'memcache' => array (
				'172.18.105.201:11211' 
		),
		//定义变量自动注入到控制器和模板，参见ThemeController/initResource
		'ASSIGN' => array (
			'baseUrl' =>  'http://' . I('server.HTTP_HOST') . '/' . MODULE_NAME,
		),
		
		'IMAGEPRE' => 'http://static.xinfuka.net/image/pro/',
		'REDIRECT' => 'http://' . I('server.HTTP_HOST') . '/' . MODULE_NAME . '/Url'
)
;