<?php
return array(
	//'配置项'=>'配置值'
		'login' => 'http://172.18.105.62:8030/Controller/Login.ashx?userNo=%s',
		'GetMenu'=>'http://172.18.102.199:10010/ProductMenu/GetMenu/%s/%s',//获得菜单(弹性福利下面的还有卡查询列表)
		'GetCitiesInfo'=>'http://172.18.102.199:10010/area/GetAreaInfoList',   //获取城市信息
		'GetAllProductInfosByEnterpriseIdAndTagIdEnterprise'=>'http://172.18.102.199:10010/product/GetAllProductInfosByEnterpriseIdAndTagIdEnterprise/%s/%s/%s/%s/%s/%s',
		'GetAllTagList' => 'http://172.18.102.199:10010/tag/GetAllTagList',
		'GetProductWithListPropertyByIdAndEnterpriseId'=>'http://172.18.102.199:10010/product/GetProductWithListPropertyByIdAndEnterpriseId/%s/%s',
);