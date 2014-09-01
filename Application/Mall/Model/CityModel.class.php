<?php
namespace Mall\Model;

class CityModel {
	//获取城市信息
	public function GetCities(){
	
		$result = getCgiData('GetCitiesInfo');
		if ($result->success) {
			$result = $result->data;
			$cities =array();
			if ($result && count($result) > 0) {
				foreach ($result as $city){
					$cities[$city->Id] = $city->Name;
				}
			}
			return $cities;
		}		
		return false;
		
	}
	
	public function ChooseCities() {
		$result = getCgiData('GetCitiesInfo');
		if ($result->success) {
			return $result->data;
		}
		
		return false;
	}
}