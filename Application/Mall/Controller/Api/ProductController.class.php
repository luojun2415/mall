<?php

namespace Mall\Controller\Api;

use Mall\Controller\AjaxController;

class ProductController extends AjaxController {
	

	public function Flex($id) {
		if (IS_AJAX) {
			$tagModel = D ( 'Tag' );
			
			$tagId = intval ( $id );
			switch ($tagId) {
				case 0 :
					$tagName = "常规卡";
					break;
				case 1 :
					$tagName = "热销卡";
					break;
				case 2 :
					$tagName = "预订卡";
					break;
				case 3 :
					$tagName = "打折卡";
					break;
				case 4:
					$tagName = "强烈推荐";
					break;
				default :
					// 需要再考虑，增加错误判断
					$tagName = "常规卡";
					break;
			}
			$tagId = $tagModel->getTagId ( $tagName );
			
			$productModel = D ( 'Product' );
			
			$products = $productModel->getProductsByTagId ( 1, 3, $this->user->enterpriseId, $tagId, $this->cityId );
			
			$this->assign ( 'products', $products );
			
			$this->display ();
		}
	}

	public function GetSkuInfo() {
		$skuId = I('skuId');
		if ($skuId) {	
			$enterpriseId = $this->user->enterpriseId;
			$result = getCgiData('GetSkuById',array($skuId,$enterpriseId));
	
			echo json_encode($result->data);
		}
	}
}