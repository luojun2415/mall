    <link href="{$noticeCssUrl}/css/notice.css?v={time()}" rel="stylesheet" type="text/css">
   	<script type="text/javascript" src="{$jsUrlPath}/common.js"> </script>
    <script type="text/javascript">
    function check_phone(obj){
        if($.trim(obj.value) == ''){
        	$('#noticePhoneErr').show().text('手机号码不能为空');
        	return false;
        }
        if(!isPhone($.trim(obj.value))){
        	$('#noticePhoneErr').show().text('手机号码填写错误');
          	return false;
        }

        $('#noticePhoneErr').hide();
    }

    function checkGoodsNoticeEmail(obj){
    	if(obj.value != '' && !isMail($.trim(obj.value))){
            $('#noticeEmailErr').show().text('邮箱填写错误');
            return false;
        }
    }
    var baseUrl = '{$baseUrl}';
    $('body').delegate('#tips','click',function(){
        $('#showGoodsNotice').show();
        if($('#noticePhone').val() == ''){
        	var get_url = $('#noticeFrame').attr('get-url');
            $.get(get_url,function(data){
                data = $.parseJSON(data);
                if(data){
                    $('#noticePhone').val(data.Phone);
                    $('#noticeEmail').val(data.Email);
                }
            });
        }
        
    });

    
    $('body').delegate('#noticeFrame','click',function(){
         var item = {};
         item.phone = $.trim($('#noticePhone').val());
         item.email = $.trim($('#noticeEmail').val());

         if(item.phone == ''){
        	 $('#noticePhoneErr').show().text('手机号码不能为空');
        	 return false;
         }
         
         if(!isPhone(item.phone)){
        	 $('#noticePhoneErr').show().text('手机号码填写错误');
        	 return false;
         } 

         if(item.email != '' && !isMail(item.email)){
             $('#noticeEmailErr').show().text('邮箱填写错误');
             return false;
         }
         
         var insert_url = $('#noticeFrame').attr('insert-url');
         //获取产品ID以及skuID
         var goodsInfo = getGoodsInfo();
         item.productId = goodsInfo[0];
         item.skuId = goodsInfo[1];
         $.post(insert_url,item,function(data){
             data = $.parseJSON(data);

             if(data.code == '301.1'){
            	 $('#noticePhoneErr').show().text('手机号码填写错误');
            	 return false;
             }else if(data.code == '301.2'){
            	 $('#noticeEmailErr').show().text('邮箱填写错误');
            	 return false;
             }
             
             if(data == 0){
            	 $('#showGoodsNotice').hide();
                 $('#tipsNotice').show();
                 $('#msgAlert').text('添加失败');
                 return false;
             }else if(data == 1){
            	 $('#showGoodsNotice').hide();
            	 $('#tipsNotice').show();
                 $('#msgAlert').text('订阅成功');
             }
             
         });
    });
    </script>
    <div id="showGoodsNotice" style="display:none;text-align:left;">
	<div class="out_div">
		<div class="inner_header">
		 	<img class="inner_header_image_l" src="http://www.xinfuka.net/css/minsheng/goodsNotice/images/r2_c4.jpg" height="25px">
		 	<img id="closeNotice" onclick="document.getElementById('showGoodsNotice').style.display='none';" class="inner_header_image_r" src="{$host}/css/minsheng/goodsNotice/images/thickbox_close.png" style="cursor:pointer;">
		</div>
		<div class="inner_content_top">
			<strong>商品在30天内到货，您将收到邮件或短信通知!</strong>
		</div>
		<div class="inner_content_bottom">
			手机号码：<input onblur="check_phone(this);" id="noticePhone" class="inner_content_bottom_input_p" type="text"> 
			      <span style="color:red;">*</span><br/>
			<span id="noticePhoneErr" style="display:none;color:red;">手机号填写错误</span><br/>
			邮箱地址：<input style="height: 26px; width: 196px;" onblur="checkGoodsNoticeEmail(this);" id="noticeEmail" class="inner_content_bottom_input" type="text"><br/>
			<span id="noticeEmailErr" style="display:none;color:red;">邮箱填写错误</span><br/>
				  <input class="inner_content_bottom_button" type="button" id="noticeFrame" insert-url="{$baseUrl}/GoodsNotice/AddSkuNotice" get-url="{$baseUrl}/GoodsNotice/GetUserNoticeInfo">
		</div>
	</div>
	<div class="layer"></div>
	</div>
	<div id="tipsNotice" style="display:none;">
	  <div class="tipsNotice">
	    <div class="inner_header">
	      <img class="tipsNotice_inner_header_image_l" src="http://www.xinfuka.net/css/minsheng/goodsNotice/images/r2_c4.jpg" height="25px">
		  <img id="closeNotice" onclick="document.getElementById('tipsNotice').style.display='none';" class="tipsNotice_inner_header_image_r" src="{$host}/css/minsheng/goodsNotice/images/thickbox_close.png" style="cursor:pointer;">
	    </div>
	    
	    <div id="msgAlert" class="msgAlert"></div>
	  </div>
	  <div class="layer"></div>
	</div>