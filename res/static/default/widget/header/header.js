define('default:widget/header/header.js', function(require, exports, module){

var http = require('common:widget/http/http.js');
var $ = require('jquery');
      //加载城市信息
		$('.ctqh').on('click',function(){
			http.get('Api/City/Choose' ,{},function(data){
				$('#sitecont').html(data);
				$('body').delegate('.hotcity a','click',function(){
					var cityId = $(this).attr('data-id');
					var cityName = $(this).html();
					changeCity(cityId, cityName);
				});
				$('#sitecont').css("display","block");
			});
			
		});
		$(document).delegate('#closeButton', 'click',function(){
			$('#sitecont').css("display","none");
		});
		$('.filter_bar a').click(function(){
			var id = $(this).attr('id');
			$('.filter_bar a').removeClass();
			$(this).addClass('current');
			$('.city_wrap p').css("display","none");
			$('.city_wrap p[name='+id+']').css("display","block");
		});
		
		function changeCity(areaId,areaName){
			//setCookie('AreaID',areaId,'h6');
			
			$("#areaName").html(areaName);
			$("#defCity").html(areaName);
			$('#sitecont').css("display","none");
			window.location.reload();
		}
		

});