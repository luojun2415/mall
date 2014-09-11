<?php

namespace Mall\Model;

class AdvertiseModel {
	function getList($pageIndex, $pageSize, $eid) {
		if ($eid) {
			$result = getCgiData('GetEnterpriseAdvPiginated', array($pageIndex, $pageSize, $eid));
		} else {
			$result = getCgiData('GetAdvPiginated', array($pageIndex, $pageSize));
		}
		
		foreach($result->data->Info as $item) {
			$item->LinkUrl = $this->parseLinkUrl($item->LinkUrl);
		}
		
		return $result->data->Info;
	}
	
	private function parseLinkUrl($linkUrl) {
		if (stripos($linkUrl, 'http') === false) {
			return 'http://' . $linkUrl;
		}
	}
}

?>