<?php
namespace Mall\Controller;
use Mall\Controller\Base\AuthController;

class UrlController extends AuthController {
	
	function Product($productId) {
		$productModel = D('Product');
		
		$productInfo = $productModel->getProudctInfo($this->user->enterpriseId, $productId);
		
		$url = $productModel->getProductUrl($productInfo);
		
		$this->redirect($this->baseUrl . '/Product/Detail/productId/' . $productId);
	}
}