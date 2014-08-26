<?php 
namespace Mall\Model;
class TagModel {
	/*
	 * 获取标签id
	* */
	public function getTagId($tagName){
		$result = getCgiData('GetAllTagList');
		
		if ($result->success) {
			$tags = $result->data;
			foreach ( $tags as $tag ) {
				if($tag->Name == $tagName){
					return $tag->Id;
				}
			}
		}		
		return false;
		
	}
}