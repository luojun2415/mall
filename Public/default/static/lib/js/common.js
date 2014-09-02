define('common', function(require, exports, module){
/**
  * 公用js,可复用js写这里
  * 使用说明：需要与jquery.js一起使用
  * 
  * 1.文本框部分
  *     1>输入框默认提醒
  *     2>字数统计
  * 2.弹出框部分
  *     1>弹出框展示
  *     2>弹出框关闭
  * 3.sugest搜索(暂支持生日社区复用)
  * 	1>
  * 4.data + trend 模式封装（结合tpl模版更佳，亦可单独使用）
  * 	1>初始化动态参数
  * 	2>相关tab切换调用
  *     3>加载动态
  *     4>读取回复（单级回复，后面可以优化）
  *     5>填充回复
  *     6>添加评论数
  *     7>动态加载组件
  * 5.cookie的封装
  * 6.session过期刷新
  * 7.基于ajax的封装
  * 8.分页组件
  * 9.iframe嵌套
  *     1>嵌套内容自适应
  */

/*文本框部分*/
/*---------------------------------------------------------------------------------------------------*/	
	/**
	 * 输入框 默认提醒显示功能
	 * 设定 class 为 .xf_itext    
	 * data-default 为 默认文本
	 * 例如： <input  type="text"  class="xf_itext" value="搜生日/找同事" data-default ="搜生日/找同事" />
	 * 
	 */
	$('.xf_itext').live('focusin',function(){
		if($(this).attr('data-default') != undefined && 
				$.trim($(this).attr('data-default')) == $(this).val()){
			$(this).val('');	
		}		
	});
	$('.xf_itext').live('focusout',function(){
		if($(this).attr('data-default') != undefined &&
				$.trim($(this).val())== ''){
			$(this).val($(this).attr('data-default'));
		}		
	});
	/**
	 * 字数统计
	 * data-wcheck  为字数动态展示 
	 * data-wshow  为字数动态展示ID
	 * 例如：
	 * <div class="review">
	 *    <p><textarea id="blessContent{$trends[i]->ID}"  class="textarea xf_itext" data-wshow="showCodeNumber{$trends[i]->ID}">输入评论内容</textarea></p>
	 *	 <div class="clr"></div>
	 *	 <p class="text_r">你已输入了 <span id='showCodeNumber{$trends[i]->ID}'></span> 个字</p>
	 *   <div class="clr"></div>
	 *	</div>
	 *  
	 */
	$('.xf_itext').live('keyup',function(){
		if($(this).attr('data-wshow') != undefined){
			var c = $(this);
			var n =c.attr('data-wshow');
			var showid =c.attr('data-wshow');
			var show = $('#'+showid);
			var n =100;
			if(c.attr('data-wcheck') != undefined){
				n=c.attr('data-wcheck');
			}
			
			if (dataLength(c.val())>n*2){
				c.attr('data-wshow' ,setString(c.val(),n*2));
			}
			show.html(Math.floor(dataLength(c.val())/2));
		}		
	});
	function dataLength(fData){
		var intLength=0;
		for (var i=0;i<fData.length;i++)
		{
		   if ((fData.charCodeAt(i) < 0) || (fData.charCodeAt(i) > 255))
		    intLength=intLength+2;
		   else
		    intLength=intLength+1;
		}
		return intLength;
	}
	function setString(str,len){
		var strlen = 0;
		var s = "";
		for(var i = 0;i < str.length;i++){
		if(str.charCodeAt(i) > 128){
		strlen += 2;
		}else{
		strlen++;
		}
		s += str.charAt(i);
		if(strlen >= len){
		return s ;
		}
		}
		return s;
	}
	/**
	 *  
	 */

/*---------------------------------------------------------------------------------------------------*/
	
	/**
	 *  弹出框样式
	 * 
	 **/
	$('.xf_alert').live('click',function(){
	        
	});
	
	function showAlert(url){
			tipsObj = document.createElement('div');
			$('body').append(tipsObj);
			$(tipsObj).css({
				'display':'block',				
				'width':'576px',
				'height':'500px',
				'left':'30%',
				'top':'20%',
				'position':'fixed',
				'z-index':'9999998',
				'border':'none'
			}).attr('id','gift_tips_win');
			$(tipsObj).show();
			newMask = document.createElement("div");
			document.body.appendChild(newMask);//遮罩层添加到DOM中  
			newMask.style.background = "#000000";//#33393C//遮罩层背景色   
			newMask.style.filter = "alpha(opacity=50)";//遮罩层透明度IE   
			newMask.style.opacity = "0.50";//遮罩层透明度FF   
			newMask.style.position = "fixed";//遮罩层位置   
			newMask.style.zIndex = "9999997";//遮罩层zIndex   					
			newMask.style.left = "0px";//设置遮罩层左边距离  
			$(newMask).attr('id', 'mask');
		       
			$(newMask).show();
			newMask.style.width = $(window).width() + "px";//设置遮罩层宽度   
			newMask.style.height = $(window).height() + "px";//设置遮罩层高度   	
			newMask.style.top =  "0px";//设置遮罩层于上边距离 
//		        newMask.style.width = $(window).width() + "px";//设置遮罩层宽度
//		        newMask.style.height = "1344px";//设置遮罩层高度
//		        newMask.style.top = "0px";//设置遮罩层于上边距离
			$("body").css("overflow","auto");
			var iframe = document.createElement('iframe');
			$(tipsObj).append(iframe);	
			$(iframe).css({
				'display':'block',
				'position':'absolute',
				'margin':'0 0',
				'width':'576px',
				'height':'504px',
				'border':'none'
			});
		        
			$(iframe).attr('src', url);
		
	        
	}
	//关闭弹出框
	function closeShow(tagId){
		$(window.parent.document.getElementById('mask')).remove();
		$(window.parent.document.getElementById(tagId)).remove();
	}

/*---------------------------------------------------------------------------------------------------*/	
	
	/**
	 * sugest搜索
	 */
	var onSearch = true;
	$(".linkage_search").hover(
			  function () {
				  onSearch = true;
			  },
			  function () {
				  onSearch = false;
				  setTimeout(hideIntelligentSelector, 200);
			  }
	);
	function hideIntelligentSelector(){
		if(onSearch){
			return;
		}	
		$('.linkage_search').hide();
	}
	function showIntelligentSelector(){
		$('.linkage_search').show();
	}



	function initIntelligentSelector(data){
	       
		var resultHtml = '';
		if(data && data.length > 0){
			for(var i = 0; i < data.length; i++){
				var item = data[i];
				var itemHtml = "<li><a href='#self' onclick='addPerson(this)' img='" + staticUrl + '/images/upload/employee/' + item.ImagePath + "' userId = '" + item.ID + "'>"+ 
				"<span class='margin_r5'><img src='" + staticUrl + '/images/upload/employee/' + item.ImagePath + "' width='15' align='middle'  /></span>" + item.Name + "</a></li>";
				resultHtml += itemHtml;				
			}
			$('.linkage_search').find('ul').html(resultHtml);

		}
	}

	function intelligentSelector(){
		var name = $('#intelligentSelector').val();
		if($.trim(name) == ''){
			 $('#intelligentSelector').parent().find('p').show();
			 $('#intelligentSelector').parent().find('ul').html('');
			 return;
		}
		$.get( baseUrl + '/Employee/ListEmployeeByName/' + name, function(data){

			if(data && data.length > 0){

				var name = $('#intelligentSelector').parent().find('p').hide();
			}else{
				return;
			}
			initIntelligentSelector(data);
		})
	}
	
	/**
	 * 右侧菜单选择
	 */
	function initMenSelector(data){
		var resultHtml = '';
		if(data && data.length > 0){
			$('.corright_nane').find('.r').html(data.length + '项');
			for(var i = 0; i < data.length; i++){
				var item = data[i];
				var itemHtml = "<li><a href='#self' style='cursor:hand;cursor:pointer;' onclick='addPerson(this)' img='" + staticUrl + '/images/' + item.ImagePath + "' userId = '" + item.ID + "'>" + item.Name + "</a></li>";
				resultHtml += itemHtml;				
			}
			$('.corrightcn').find('ul').html(resultHtml);
		}
	}

	function showMenSelector(){
		$('.corrightcn').find('ul').html('');
		$('.organization').show();
		$('.corright_nane').find('.l').html('all');
		$.get( baseUrl + '/Employee/ListEmployeeByLetter', function(data){
			initMenSelector(data);
		})
	}
	function hideMenSelector(){
		$('.organization').hide();
	}
	
	/**
	 * 根据首字母选择
	 */
	$('.letter').live('focusin',function(){
	});
	/**
	 * 选择项
	 */
	var personList = {};
	var len =0;
	function deletePerson(obj){
		var person = $(obj).parent().parent();
		var userId = person.attr('userId');
		delete personList[userId];
		len--;
		 $('#personCount').html(len);
		person.remove();
		if(len == 0){
			$('.input_textcolor').show();
		}
	}

	function addPerson(obj){
		
		if(len == 1){
			alert("只能选择一个认可对象"); return;
		}
		 //alert(personList.toSource());
		 //<span class="l fromaddpeople margin3 backgroundblue boxall"><span class="l margin_r10"><img src="{$staticUrl}/image/page/userpic.jpg" width="19" height="23" /></span><span class="l margin_r10">秦文艳</span><span class="l margin_r5"><a href="#" class="text_bold family_verdana">×</a></span></span> 
	    var personHtml = "<span class='l fromaddpeople margin3 backgroundblue boxall' userId='{userId}'><span class='l margin_r10'><img src='{imgUrl}' width='19' height='23' /></span><span class='l margin_r10'>{name}</span><span class='l margin_r5'><a href='#self' onclick='deletePerson(this)' class='text_bold family_verdana'>×</a></span></span> ";
	    var imgUrl = $(obj).attr('img');
	    var userId = $(obj).attr('userId');
	    var name = $(obj).text();
	    if(personList[userId]){
	    	return;
	    }
	    personList[userId] = userId;
	    len++;
	    $('#personCount').html(len);
	    $(personHtml.replace('{imgUrl}', imgUrl).replace('{name}', name).replace('{userId}', userId)).insertBefore('.text_lineheight30');
		var limit = $(".limitLength").data("limit");
		if(limit > 0 && len >= limit){
			$('.input_textcolor').hide();
			return ;
		}
	}
	
/*--------------------------------------------------------------------------------------------------*/	
	
	/**
	 * data+reply 的列表封装
	 * 用法说明：  
	 *  
	 */
	
	/**
	 * 初始化条件
	 * data-bind
	 * data-value
	 * data-tab-class
	 * data-on
	 */
	var args = [];
	var keywords = [];
	 $('.xf_load_tab').ready(function(){
		 var t = $(this);
		 var bindArgName = t.attr('data-bind');
		 var v = $(this).attr('data-value');
		 var curclass = t.attr('data-tab-class');
		 var onclass = t.attr('data-on');
		 var initclass =t.attr(' data-init-class');
		
		 if(initclass != undefined){
			 $(this).attr('class',initclass);
		 }
		 var isKeyword = 0;
		 if(curclass === onclass && isKeyword == undefined && args[bindArgName] == undefined){
				 args[bindArgName] = v;
		 }
		 
		 if(curclass === onclass && isKeyword != undefined && keywords[bindArgName] == undefined){
				 keywords[bindArgName] = v;
		 }
	 });
	
	
	 /**
		 * 对应的条件变更
		 * 需要添加 data-bind  绑定参数
		 * 		   data-keyword  是否是关键字
		 *  	   data-value  对应值
		 *         data-tab-class tab组类
		 *         data-on  选中的样式
		 *         data-off 未选中的样式
		 *         data-list 对应加载的class
		 *         data-init-class 初始化class
		 *         
		 *         opts  大于0   页码加1
		 *         opts  小于0   到改页码
		 *         opts  等于0   页码到1
		 *         
		 */
		$('.xf_load_tab').live('click',function(){
			var bindArgName = $(this).attr('data-bind');
			var v = $(this).attr('data-value');
			
			var tabclass = $(this).attr('data-tab-class');
			var onclass = $(this).attr('data-on');
			var offclass = $(this).attr('data-off');
			var listclass = $(this).attr('data-list');
			args[bindArgName]= v;
			//设定选择状态
			$('.'+tabclass).each(function(){
//				alert($(this).attr('data-tab-class'));
				$(this).removeAttr('class').attr('class',offclass);
//				alert($(this).attr('class'));
			});
//			alert('fsdfs11');
			$(this).removeAttr('class').attr('class',onclass);
			
			if(listclass != undefined){
				loadList(listclass,0);
			}
			
			
		});
	
	
	 /** 
	  	 * data-url    动态数据获取url
		 * data-remark  评论加载url (可选)
		 * data-find   以 ‘-’分割
		 * data-count  每页显示信息数
		 * data-index  当前页码
		 * 
		 * 
		 */
	
	function loadList(listclass,opts){
		var t=$('.'+listclass);
		 var url = t.attr('data-url');
		 var remarkUrl = t.attr('data-remark');
		 var data = {};
		 var index = t.attr('data-index');
		 var count = t.attr('data-count');
		 
		 if(t.attr('data-find') != undefined){
			 //获取条件
			 var dataNamesString =t.attr('data-find');
			 var dataNames = dataNamesString.split("-");
			 //正常参数获取
			 for(var i=0;i<dataNames.length;i++){
				 $(data).attr(dataNames[i],args[dataNames]);
			 }
			 //关键字获取
			 var keywordsString = '';
			 var spiltOpt = '-';
			 for(var i=0;i<keywords.length;i++){
				 keywordsString  = keywords[i] + keywordsString;
				 if(i< keywords.length-1){
					 keywordsString= keywordsString + spiltOpt;
				 }
			 }
			 $(data).attr('keywords',keywordsString);
		 }
		 $(data).attr('index',index);
		 $(data).attr('count',count);
		 $.get(url,data,function(content){
			 if($.trim(content) != ''){
				 
				 if(opts == 0){
					 t.attr('data-index',1);
					 t.html(content);
				 }else if(opts > 0){
					 t.attr('data-index',parseInt(index) + parseInt(opts));
					 var oldHtml = t.html();
					 t.html(oldHtml + content);
				 }else{
					 t.attr('data-index',-parseInt(opts));
					 t.html(content);
				 }
				 
				 if(remarkUrl != undefined){
					 loadReplys(listclass,t.attr('data-index'),t.attr('data-count'),remarkUrl);
				 }
				
				 return 1;
			 }else{
				 return 0;
			 }
		 });
	}
	
	/**
	 * 加载评论
	 */
	//回复加载
	function loadReplys(listclass,index,count,url){
		var beginIndex=(index-2)*count;
		var endIndex=(index-1)*count;
		for(var i=beginIndex;i<endIndex;i++){
				var trendID=$('#remark'+i).attr('data-id');
				loadReply(url,trendID,i);
		}
	}

	//回复加载填充
	function loadReply(url,trendID,index){
		$.get(url,
				  {'trendID':trendID},
				  function(data){
					$('#remark'+index).html(data);  
					loadReplyCount(index);
					
			});
	}


	//加载评论数
	function loadReplyCount(beginIndex){
			var count=$('#remark'+beginIndex).find('.a-reply').length;
			$("#rcount"+beginIndex).html(count);
	}
	
	function showConponent(className){
		
		if($("."+className).is(":hidden"))
		{
			$("."+className).fadeIn("slow");
		}else{
			$("."+className).fadeOut("slow");
		}
	}
	 
	//评价功能
	var isPostBless = true;
	function postBless(url,trendID){
		var c = $("#blessContent"+trendID).get(0).value;
		
		if(isPostBless && c!=''){
			$.post(url,{'trendID':trendID,'blessContent':c},
					function(data){
						$("#blessContent"+trendID).val('');
						isPostBless = true;
					//	location.href = baseUrl + '/home';
					 	location.reload();
				});
		}
		isPostBless = false;
	}
	 
	 /**
	  * 动态加载组件
	  * data-list
	  */
	 $('.trendOnload').live('click',function(){
		 var t =$('.trendOnload');
		 var listclass =t.attr('data-list');
		 t.html('加载中....');
		 var result = loadList(listclass,1);
		 if(result == 0){
			 $('.trendOnload').html('所有加载已完成');
		 }else{
			 $('.trendOnload').html('点击加载');
		 }
		 
	 });
	 
	 /**
	  * 分页组件加载
	  */
	 $('.beforePage').live('click',function(){
		 
	 });
	 $('.beforePage').live('click',function(){
		 
	 });
	 $('.page').live('click',function(){
		 
	 });
	 
	 /**
	  * 数据总量展示
	  * 设定总量的class  =  amount
	  */
	 function showAmount(amount){
		 $('.amount').html(amount);
	 }

	 
	 /*--------------------------------------------------------------------------------------------------------------*/
	 /**
	  * cookie封装 
	  */
	//删除cookies
	 function delCookie(name)
	 {
	     var exp = new Date();
	     exp.setTime(exp.getTime() - 1);
	     var cval=getCookie(name);
	     if(cval!=null)
	         document.cookie= name + "="+cval+";expires="+exp.toGMTString();
	 }
	 
	//读取cookies
	 function getCookie(name)
	 {
	     var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
	     if(arr=document.cookie.match(reg))
	    	 
	         return (arr[2]);
	     else
	         return null;
	 }
	 
	 function setCookie(name,value,time)
	 {
	     var strsec = getsec(time);
	     var exp = new Date();
	     exp.setTime(exp.getTime() + strsec*1);
	     document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString()+';path=/';
	 }

	 function getsec(str)
	 {
//	    alert(str);
	    var str1=str.substring(1,str.length)*1;
	    var str2=str.substring(0,1);
	    if (str2=="s")
	    {
	         return str1*1000;
	    }
	    else if (str2=="h")
	    {
	        return str1*60*60*1000;
	    }
	    else if (str2=="d")
	    {
	        return str1*24*60*60*1000;
	    }
	 }
/*---------------------------------------------------------------------------------------------------------------------*/
	 function takeCode(code){
		if(code == 200){
			return true;
		}else{
			if(window.parent){
				window.parent.location.reload();
			}else{
				window.location.reload();
			}
		}
	}
/*---------------------------------------------------------------------------------------------------------------------*/
  /**
   * 基于ajax的验证 :由于改动较大，暂时兼容
   */ 
	 var oldcookie = getCookie('xf_sid');
	 $(document).ready(function(){
		  $(document).ajaxSuccess(function(evt, request, settings){
			  var code =200;
			  if(request.responseText !=undefined){
				  code = request.responseText.Code;
			  }
			  
			  if(code instanceof Array){
				  code = 200;
			  }
			  var cookie = getCookie('xf_sid');
//			  alert(cookie);
			  if( cookie == oldcookie){
				  code = 200;
			  }else{
				  code = 0;
			  }
			  takeCode(code);
		  });
		});
	
	/*----------------------------------------------------------------------------------------------------------------*/
	 /**
	   * 验证公共函数
	   */
  	   function stringToObject(separator,str){
			if(str != undefined && str != ""){
				var arr = str.split(sepatator);
				var obj = {};
				for(var i in arr){
					eval('obj.'+arr[i] + '='+ arr[i]);
				}
				return obj;
			}
	   }
	   
	   function stringToGetArgs(separator,str){
			var obj = stringToObject(separator,str);
			var getStr = "?";
			for(var key in obj){
				getStr += key+"="+obj[key];
			}
			return getStr;
	   }
	   
	   function bindAction(id,actionType,functionName){
			if($("#"+id) != undefined){
				$("#"+id).live(actionType,functionName);
			}
	   }
	   
	   
	   //验证正整数
	   $(".validation_num").live("focusout",function(){
			
			var num = $(this).val();
			var min = $(this).data("min");
			var max = $(this).data("max");
			var result = validation_num(num,min,max);
			if(!result){
				$(this).val(min);
			}
	   });
	   
	   
	   function validation_num(num,min,max){
			var numRule=/^([0-9])*$/;
			if(!numRule.test(num)){
				alert('请输入数字');
				return false;
			}
			if(parseInt(num) > max){
				alert('输入页数过大');
				return false;
			}
			if(parseInt(num) < min){
				alert('输入页数过小');
				return false;
			}
			return true;
	   }
	   
	   
/*---------------------------------------------------------------------------------------------*/
  function autoResize(){ 
  }

 /*---------------------------------------------------------------------------------------------*/
  
  
  
  /*------------------------------------数据校验---------------------------------------------------------*/
  
	//手机号码校验
	function isPhone(str){
		var reg = /^0{0,1}(13[0-9]|145|147|15[0-3]|15[5-9]|18[0-9])[0-9]{8}$|^$/;
		if(str!=""&&reg.test(str)){
			return true ;
		}
		return false;
	}
	


	//邮箱校验
	function isMail(str){
		strReg=/^\w+((-\w+)|(\.\w+))*\@{1}\w+\.{1}\w{2,4}(\.{0,1}\w{2}){0,1}/ig;
		if(str!= "" && strReg.test(str)){
			return true ;
		}
		return false;
	}
	
	//固定电话校验
	function isTelephone(str)// 正则判断
	{ 
//		var pattern=/(^[0-9]{3,4}\-[0-9]{3,8}$)|(^[0-9]{3,8}$)|(^\([0-9]{3,4}\)[0-9]{3,8}$)|(^0{0,1}13[0-9]{9}$)/; 
		var pattern = /^\d{3}-\d{8}|\d{4}-\d{7}$/;
		if(pattern.test(str)) 
		{ 
			return true; 
		} 
		else 
		{ 
			return false; 
		}
	} 

	//邮政编码验证
	function isPostCode(str){
		var pattern=/^[1-9][0-9]{5}$/; 
		if(pattern.test(str)) 
		{ 
			return true; 
		} 
		else 
		{ 
			return false; 
		}
	}
	
	//判断字符串是否为空
    function isNotEmpty(str){
    	if(str == ""){
    		return false;
    	}
    	return true;
    }
    
    //判断是否为数字
    function checkIsNum(num){
    	var numRule=/^([0-9]*[1-9][0-9]*)$/;
    	if(!numRule.test(num)){
    		return false;
    	}
    	return true;
    }
    
    //验证特殊字符
    function stripscript(s){

    	var pattern = new RegExp("[`~@#$^&*=|{}\\[\\]<>/~@#￥……&*——|{}]");
	    var rs = "";
	    for (var i = 0; i < s.length; i++) {
	    rs = rs+s.substr(i, 1).replace(pattern, '');
	    }
	    return rs;
    }
    function stripscriptInput(s){
	    var pattern = new RegExp("[`~!@#$^&*=|{}':;',\\[\\].<>/?~！@#￥……&*——|{}【】‘；：”“'。，、？]");
 
	    var rs = "";
	    for (var i = 0; i < s.length; i++) {
	    rs = rs+s.substr(i, 1).replace(pattern, '');
	    }
	    return rs;
    }
    function stripscriptInput(s){
	    var pattern = new RegExp("[`~!@#$^&*=|{}':;',\\[\\].<>/?~！@#￥……&*——|{}【】‘；：”“'。，、？]");
	    var rs = "";
	    for (var i = 0; i < s.length; i++) {
	    rs = rs+s.substr(i, 1).replace(pattern, '');
	    }
	    return rs;
    }
    //过滤特殊字符
    function filterFlag(s){
    	var flags = 'and|exec|insert|select|delete|update|count|*|+|%|chr|mid|master|truncate|char|declare|script|input|add';
    	flagsArr = flags.split('|');
    	for(var i=0;i< flagsArr.length;i++){
    		if(s.indexOf(flagsArr[i])!= -1){
        		return false;
        	}
    	}
    	return true;
    }
    
    //非法字符检测
    $(".textCheck").live('focusout',function(){
    	var text = $(".textCheck").val();
    	if($.trim(text) == ''){
    		return;
    	}
    	if(!filterFlag(text) || (stripscript(text) != text)){
    		alert('存在非法字符！');
    		$(this).focus();
    	}
    });
    
    function textCheck(text){
    	if($.trim(text) == ''){
    		return true;
    	}
    	if(!filterFlag(text) || (stripscript(text) != text)){
    		return false;
    	}
    	return true;
    }
    
    function textCheckInput(text){
    	if($.trim(text) == ''){
    		return true;
    	}
    	if(!filterFlag(text) || (stripscriptInput(text) != text)){
    		return false;
    	}
    	return true;
    }
    
    //过滤特殊字符
    function filterFlag(s){
    	var flags = 'and|exec|insert|select|delete|update|count|*|+|%|chr|mid|master|truncate|char|declare|script';
    	flagsArr = flags.split('|');
    	for(var i=0;i< flagsArr.length;i++){
    		if(s.indexOf(flagsArr[i])!= -1){
        		return false;
        	}
    	}
    	return true;
    }
    
    //非法字符检测
    $(".textCheck").live('focusout',function(){
    	var text = $(".textCheck").val();
    	if($.trim(text) == ''){
    		return;
    	}
    	if(!filterFlag(text) || (stripscript(text) != text)){
    		alert('存在非法字符！');
    		$(this).focus();
    	}
    });
    
    function textCheck(text){
    	if($.trim(text) == ''){
    		return true;
    	}
    	if(!filterFlag(text) || (stripscript(text) != text)){
    		return false;
    	}
    	return true;
    }
    
    function textCheckInput(text){
    	if($.trim(text) == ''){
    		return true;
    	}
    	if(!filterFlag(text) || (stripscriptInput(text) != text)){
    		return false;
    	}
    	return true;
    }
    //过滤特殊字符
    function filterFlag(s){
    	var flags = 'and|exec|insert|select|delete|update|count|*|+|%|chr|mid|master|truncate|char|declare|script';
    	flagsArr = flags.split('|');
    	for(var i=0;i< flagsArr.length;i++){
    		if(s.indexOf(flagsArr[i])!= -1){
        		return false;
        	}
    	}
    	return true;
    }
    
    //非法字符检测
    $(".textCheck").live('focusout',function(){
    	var text = $(".textCheck").val();
    	if($.trim(text) == ''){
    		return;
    	}
    	if(!filterFlag(text) || (stripscript(text) != text)){
    		alert('存在非法字符！');
    		$(this).focus();
    	}
    });
    
    function textCheck(text){
    	if($.trim(text) == ''){
    		return true;
    	}
    	if(!filterFlag(text) || (stripscript(text) != text)){
    		return false;
    	}
    	return true;
    }
    
    function textCheckInput(text){
    	if($.trim(text) == ''){
    		return true;
    	}
    	if(!filterFlag(text) || (stripscriptInput(text) != text)){
    		return false;
    	}
    	return true;
    }
    
    //判断微信号
    function isWeixin(text){
    	if($.trim(text) == ''){
    		return false;
    	}
    	
    	if(!/^[a-zA-Z](\w|-){5,19}$/.test(text)){
    		return false;
    	}
    	
    	return true;
    }
    
    //判断QQ号
    function isQQ(text){
    	if($.trim(text) == ''){
    		return false;
    	}
    	
    	if(!/^\d{5,20}$/.test(text)){
    		return false;
    	}
    	
    	return true;
    }
    
    //手机动态验证码
    function isDynamicMobileCode(code){
        var patter = /^\d{6}$/;
        if(!patter.test(code)){
            return false;
        }
        return true;
    }
    
	/*------------------------------------数据校验---------------------------------------------------------*/
})
    
    
    