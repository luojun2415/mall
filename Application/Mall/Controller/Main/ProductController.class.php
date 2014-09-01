<?php

namespace Mall\Controller\Main;

use Mall\Controller\AuthController;

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
}