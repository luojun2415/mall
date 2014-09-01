<?php 
return array(
		'FLOW' => array(
			'CSF' => array(
				'Condition' => array(
					'ProductId' => array(),
					'ProductName' => array('超市发电子码', '超市发礼品卡', '超市发电子码(礼品卡)'),
					'MerchantId' => array(),
				),
				'Url' => array('Controller' => '', 'Action' => '')
			),
			'KC' => array(
				'Condition' => array(
					'ProductId' => array(),
					'ProductName' => array('话费空中充值'),
					'MerchantId' => array(),
				),
				'Url' => array('Controller' => '', 'Action' => '')
			),
			'E' => array(
				'Condition' => array(
					'ProductId' => array(),
					'ProductName' => array('当当礼品卡','京东商城礼品卡','卓越礼品卡', '京东E卡'),
					'MerchantId' => array(),
				),
				'Url' => array('Controller' => '', 'Action' => '')
			),
			'AGCOD' => array(
				'Condition' => array(
					'ProductId' => array(),
					'ProductName' => array('亚马逊乐享卡'),
					'MerchantId' => array(),
				),
				'Url' => array('Controller' => '', 'Action' => '')
			),
				//默认流程
			'Common' => array(
				'Condition' => array(
					'ProductId' => array(),
					'ProductName' => array(),
					'MerchantId' => array(),
				),
				'Url' => array('Controller' => 'Main/Product', 'Action' => 'Detail')
			)
		),
);