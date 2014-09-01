<?php
namespace Mall\Controller\Main;
use Mall\Controller\AuthController;

class UrlController extends AuthController {
	
	function Product($productId) {
		$productModel = D('Product');
		
		$productInfo = $productModel->getProudctInfo($this->user->enterpriseId, $productId);
		
		$url = $productModel->getProductUrl($productInfo);
		
		$this->redirect($this->baseUrl . '/Main/Product/Detail/productId/' . $productId);
	}
}