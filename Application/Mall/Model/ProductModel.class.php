<?php 
namespace Mall\Model;
class ProductModel {
	
	function getProductsByTagId($pageIndex, $pageSize, $enterpriseId, $tagId, $cityId = 1) {
		$products = getCgiData('GetAllProductInfosByEnterpriseIdAndTagIdEnterprise', 
				array($pageIndex,$pageSize, $enterpriseId, $tagId, $cityId, 1));
		
		if ($products->success) {
			return $this->parseProductsInfo($products->data->Info);
		}
		
		return false;
	}
	
	protected  function parseProductsInfo($products) {
		if(isset($products) && count($products) > 0) {
			foreach($products as $product) {
				$product->ProductUrl = fixUrl(C('REDIRECT')) . 'Product/productId/' . $product->ProductId; 
				$product->ThumbnailUrl = $this->getImageUrl($product->ThumbnailUrl);
				$product->DefaultImageUrl = $this->getImageUrl($product->DefaultImageUrl);
				$product->ProductImageList = $this->parseImageUrl($product->ProductImageList);
				$product->Target = '__blank';
			}
		}
	
		return $products;
	}
	
	/**
	 * 解析商品的缩略图链接
	 *
	 */
	protected function getImageUrl($imageUrl){			 
		if (!substr_count($imageUrl, 'http://') > 0){		
			$imageUrl = strtr($imageUrl,"\\","/");
			$imageUrl = fixUrl(C('IMAGEPRE')) . $imageUrl;
		}
		return $imageUrl;
	}
	
	/**
	 * 图片路径处理
	 * Enter description here ...
	 * @param unknown_type $result
	 * @param unknown_type $data
	 */
	private function parseImageUrl($imageList){
		if(count($imageList) > 0) {
			foreach($imageList as $listItem) {
				$imageUrl = $listItem->ImageUrl;
				$thumbUrl = $listItem->ThumbnailUrl;
				$listItem->ThumbnailUrl = $this->getImageUrl($thumbUrl);
				$listItem->ImageUrl = $this->getImageUrl($imageUrl);
			}
		}		
		return $imageList;
	}
	
	function getProductUrl($product) {
		$flows = C('FLOW');
		
		foreach($flows as $flow) {
			$conditions = $flow['Condition'];
			foreach($conditions as $cndKey => $cndValue) {
				if (isset($product->{$cndKey})) {
					if ($this->isConditionMatch($product->{$cndKey}, $cndValue)) {
						$url = $flow['Url'];
						break;
					}
				}
			}
		}
		if (!isset($url)) {
			$url = $flows['Common']['Url'];
		}
						 
		return $url;
	}
	
	protected function isConditionMatch($attrValue, $valueArray) {
		$result = 0;
		foreach($valueArray as $v) {
			$result += substr_count($attrValue, $v);
		}
		
		return $result > 0;
	}
	
	function getProudctInfo($enterpriseId, $productId) {
		$result = getCgiData('GetProductWithListPropertyByIdAndEnterpriseId', array($enterpriseId, $productId));
		if ($result->success) {
			$products = $this->parseProductsInfo(array($result->data));
			return $products[0];
		}
		
		return false;
	}
	
}