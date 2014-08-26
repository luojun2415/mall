define('default:widget/header/header.js', function(require, exports, module){

var http = require('common:widget/http/http.js');

      //加载城市信息
		$(function(){
			$('.ctqh').live('click',function(){
				http.get('CommonFrame','getCitiesInfo' ,{},function(data){
					$('#sitecont').html(data);
					$('#sitecont').css("display","block");
				});
				
			});
			$('#closeButton').live('click',function(){
				$('#sitecont').css("display","none");
			});
			$('.filter_bar a').click(function(){
				var id = $(this).attr('id');
				$('.filter_bar a').removeClass();
				$(this).addClass('current');
				$('.city_wrap p').css("display","none");
				$('.city_wrap p[name='+id+']').css("display","block");
			});
		});
		
		function changeCity(areaId,areaName){
			setCookie('AreaID',areaId,'h6');
			
			$("#areaName").html(areaName);
			$("#defCity").html(areaName);
			$('#sitecont').css("display","none");
			window.location.reload();
		}
		

});