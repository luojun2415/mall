<?php
namespace Mall\Model;

class GoodsModel {
	
	/**
	 * 描述：根据标签类别获取商品List
	 * Enter description here ...
	 * @param string $name 标签名字
	 * @param array $needsParam 需要调用API的参数
	 * return array 
	 */
	public function GetGoodsList($name,$needsParam){
		$tagId = $this->GetTagIdByTagName($name);
		$needsParam = array_unshift($needsParam, $tagId);
		$result = CGIManager::DoApi('GetAllProductInfosByEnterpriseIdAndTagIdEnterprise', $needsParam);
		return is_object($result) ? objectToArray($result->Info) : array();
	}
	
	/**
	 * 描述：根据标签名获取标签ID
	 * Enter description here ...
	 * @param unknown_type $tagName
	 */
	public function GetTagIdByTagName($tagName){
		return CGIManager::DoApi('GetTagIdByTagName',array($tagName));
	}
	
	
	
	/**
	 * 根据标签获取商品list
	 * Enter description here ...
	 * @param unknown_type $needArray
	 */
	public function GetAllProductInfosByEnterpriseIdAndTagIdEnterprise($needArray){
		return CGIManager::DoApi('GetAllProductInfosByEnterpriseIdAndTagIdEnterprise',$needArray);
	}
	/**
	 * 获得一级和二级菜单
	 * Enter description here ...
	 * menuId 无用
	 * type{1:tag; 2:category}
	 * value 是二级菜单的id（ 比如 打折卡的id）
	 */
	public  function GetMenu($enterpriseId){
			$data = $this->data;
			$hotProducts = '热销卡';
			$commonProducts = '常规卡';
			$destineProducts = '预订卡';
			
			$result = getCgiData('GetMenu',array($enterpriseId,1));

			if($result->success){
				$result = $result->data;
				foreach ($result->Info as $key){
					$key->NameBase64 = urlencode($key->Name); 
					if(count($key->Childs)>0){
						foreach ($key->Childs as $keyChi) {
							$keyChi->UrlEnMenuName	= urlencode($keyChi->MenuName);
						}
						$result->hotProducts = $this->GetProIdAndProFathIdByTagName($result->Info,$hotProducts);
						$result->commonProducts = $this->GetProIdAndProFathIdByTagName($result->Info,$commonProducts);
						$result->destineProducts = $this->GetProIdAndProFathIdByTagName($result->Info,$destineProducts);
					}else{
						$key->Childs[0]->Value = '-';
						$key->Childs[0]->UrlEnMenuName = '-';
						$key->Childs[0]->Type = '-';
					}		
				}
			}
			return $result;
		}
	/**
	 * 
	 * Enter description here ...
	 * @param unknown_type $result
	 */
	private function GetProIdAndProFathIdByTagName($result,$tagName){
		$data = array();
		foreach ($result as $key => $value){
			foreach($value->Childs as $ke => $val){
				if($val->MenuName == $tagName){
					$data['Products_SonId']=$val->Value;
					$data['Products_SonName']=$val->UrlEnMenuName;
					$data['Products_FathId']=$value->MenuId;
					$data['Products_FathName']=$value->NameBase64;
				} 
			}
		}
		return $data;
	}
 
	/**
     * 获得食材专区的菜单
     * Enter description here ...
     */
   public function getShiCaiMenu(){
   		$shiCaiMenu = config_item("shiCaiMenu");
		foreach ($shiCaiMenu as $key => $val){
			$valReplace =str_replace("/", "", $val['tagName']);
			$tagId = $this->getTagId($valReplace);
			$shiCaiMenu[$key]['tagNameEn'] = urlencode($valReplace);
			$shiCaiMenu[$key]['tagId'] = $tagId;
		}
		return $shiCaiMenu;
   }
   
	/**
	 * 获取标签id
	 * */
	private function getTagId($str){
		$tags = CGIManager::DoApi('GetAllTagList');
        foreach ( $tags as $tag ) {
        	if(trim($tag->Name) == trim($str)){
        		return $tag->Id;
        		break;
        	}
        }
	}
	
	//529专区的菜单
	public function GetMenu529(){
		$menu = config_item("menu_529");
		$counNum = count ($menu);
		for ($i=0;$i<$counNum;$i++){
			$countNumSe = count($menu[$i]['soNameList']);
			for ($j=0;$j<$countNumSe;$j++){
				$tagName = $menu[$i]['soNameList'][$j]["name"];
				$tagName = ($tagName == '提卡券') ? '超市卡':$tagName;
				$tagId = $this->getTagId($tagName);
				$menu[$i]['soNameList'][$j]["id"] = $tagId;
			}
		}
		return $menu;
	}
	
	/**
	 * 502,529 获取左侧菜单逻辑处理
	 * Enter description here ...
	 * @param unknown_type $data
	 * @param unknown_type $type
	 */
	public function GetMenuBy502529($data,$type){
		if($type !== null){
				XFMemcache::setMemValue('502key_' . $_COOKIE[COOKIE_KEY] . $data['name'],$type);
				//502专区加载分类配置
				if(isset($data['open502']) || isset($data['open529'])) {
					$data['502Classes'] = $this->config->item('502Classes');
					$data['502Classes'] = $data['502Classes'][$type];
					$data['type'] = $type;
				}
		}
		return $data;
	
	}
}




















