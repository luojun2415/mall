<?php
return array (
		// '配置项'=>'配置值'
		'LOAD_EXT_CONFIG' => 'cgi,graypublish,theme,flow',
		'CONTROLLER_LEVEL' => 2,
		'DEFAULT_CONTROLLER' => 'Main/Index',
		'memcache' => array (
				'172.18.105.201:11211' 
		),
		
		'ASSIGN' => array (
			'baseUrl' =>  'http://' . I('server.HTTP_HOST') . '/' . MODULE_NAME,
		),
		
		'IMAGEPRE' => 'http://static.xinfuka.net/image/pro/',
		'REDIRECT' => 'http://' . I('server.HTTP_HOST') . '/' . MODULE_NAME . '/Main/Url'
)
;