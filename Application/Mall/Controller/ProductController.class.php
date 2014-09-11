<?php

namespace Mall\Controller;

use Mall\Controller\Base\AuthController;

/**
 * Enter description here .
 *
 * ..
 *
 * @author Administrator
 *         $t --　产品服务的分类类别　１商务卡　　３旅游卡　　４生日卡
 *         $l -- 产吕服务子分类　dz打折卡　cg常规卡　rx热销卡
 */
class ProductController extends AuthController {
	
	/*
	 * 跳转到产品服务页
	 */
	public function Index() {
		// 公用的提取到MY_Controller
		$data = $this->data;
		$data ['tagId'] = 'tag2';
		$data ['title'] = '产品服务';
		
		$enterpriseId = $this->get ( 'user' )->enterpriseId;
		$d = C ( 'employeeRenke' );
		// 奖励认可权限判定
		if (in_array ( $enterpriseId, C ( 'employeeRenke' ) )) {
			$this->get ( 'user' )->allowEmoployRenke = TRUE;
		}
		
		$goodsModel = D ( 'Goods' );
		
		$menu = $goodsModel->GetMenu ( $this->get ( 'user' )->enterpriseId );
		
		// 获得弹性福利下面的菜单
		$this->assign ( 'menu', $menu );
		$this->display ();
	}
	
	protected function Valid($product) {
		$productModel = D ( 'Product' );
		$url = $productModel->getProductUrl ( $product );
		
		if (ACTION_NAME == $url ['Action'] && CONTROLLER_NAME == $url ['Controller']) {
			return true;
		} else {
			return false;
		}
	}
	
	function Detail($productId) {
		$productModel = D ( 'Product' );
		$productInfo = $productModel->getProudctInfo (  $productId,$this->user->enterpriseId );
		
		if ($productInfo) {
			if ($this->Valid ( $productInfo )) {
				$this->assign ( 'product', $productInfo );
				$this->display ( );
			} else {
				echo 'failed';
			}
		} else {
			echo '错误页面';
		}
	}
	
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