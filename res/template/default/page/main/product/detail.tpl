{extends file="default/page/layout.tpl"}
{block name="content"}
<div class="w">
  <div class="currentlocation box bgwhite ">当前位置∶{$bread}</div>
</div>
<div class="clar"></div>
<div class="w">  
  <div class="shoplistleft">
  {if isset($style) AND $style eq 'beizhan'}
  	 {include file="beizhan/LeftNavigation.tpl"}
  {elseif isset($open529) || isset($open502)} {*食材卡专区专用*}
  	{include file="{$style}/menu.tpl"}   
  {else}
  <!-- 左侧菜单开始 -->
	<div class="shophome_nva" style="height: auto;width:220px;">  
	<ul>	 
  	 <li style="padding:0px 15px;" class="bg_lightblue">
          <div class="navigation_pic navigation_pic_ico1">
            <h3> 弹性福利 </h3>
            <span class="text_12 orange text_bold">（礼卡积分）</span></div>
            	<div class="navigation_cntext">
		        {section name=i loop=$menu->Info}
            	   <a href="{$baseUrl}/ProductService/NewBusiness/{$menu->Info[i]->NameBase64}/{$menu->Info[i]->MenuId}/{$menu->Info[i]->Childs[0]->UrlEnMenuName}/{$menu->Info[i]->Childs[0]->Value}/{$menu->Info[i]->Childs[0]->Type}" >{$menu->Info[i]->Name}</a>  
		        {/section}
		        </div>
        </li>
       </ul>
  	 </div>
  	{/if}
  	<!-- 左侧菜单结束 -->
  	 <!-- 最近浏览 --> 
  	 <div class="clar"></div>
     <div id="recentList" class="recentlypreview bgwhite box">
     </div>
     <!-- 最受欢迎的卡 -->
  	 <div class="clar"></div>
     <div id="rankList" class="recentlypreview bgwhite box">
     </div>
  </div>
  
  <div class="shoplistright  box bgwhite">
    <div class="clar"></div>
    <div class="shopcn_pic">
      <div class="l piccn">
        <div class="bigsmall">
        <img id="bigPicToShow" width="318" height="224" src="{$product->DefaultImageUrl}" />
        </div>
        <div class="smallimg">
          <div class="smallpicleft"></div>
          <div class="smallshoppic">
            <ul>
            {foreach $product->ProductImageList as $item}
            	<li>
            		<img onclick="changeBigPic(this)" style="cursor:hand;cursor:pointer;" src="{$item->ThumbnailUrl}" bigImg="{$item->ImageUrl}" border="0"/>
            	</li>
            {/foreach}
            </ul>
          </div>
          <div class="smallshoppicright"></div>
        </div>
      </div>
      <!--产品内容-->
      <div class="shopcntext" id="cardType" cardType="{$product->MerchantName}">
        <h2>{$product->ProductName}</h2>
        <ul>
          <li>产品编号：{$product->ProductCode}</li>
          <li>商户：{$product->MerchantName}</li>
          <li><span class="l">面值：</span>
            <ul id="attributeValue" class="skuName tb-prop l" >
            	{if isset($product->SkuList) && count($product->SkuList)>0}
            	{foreach $product->SkuList as $sku}
            		{if isset($product->MerchantName) && $product->MerchantName == '凡客诚品' }
            		<li><a href="#"><span id="{$sku->Id}">{$sku->SkuName}</span></a></li>
            		{else}
            		<li><a href="#"><span id="{$sku->Id}">{$sku->Price|string_format:"%.2f"}</span></a></li>
            		{/if}
            	{/foreach}
            	{/if}
            </ul>
          </li>
          <li>薪福价：<span id="XinfuPrice">0.00</span></li>
          <li>所属城市：{$product->AreaName} </li>
          <li>本周预算：<span id="addedQuantity"></span>张</li>
          <li id="goodsNotice" style="display: none; cursor: pointer;"> 
          	  <div id="tips">
                  <a href="javascript:void(0);" id="productDetails" data-productId="{$product->ProductId}" data-skuId="">
                  	<img src="http://dev.mall.com/res/static/default/page/main/product/img/goodsNotice.png"/>
                  </a>
              </div>
          </li>
        </ul>
        <div id="limitHandler" class="box shopcn_tj por_relative">
	        <div id="shoppingBlock" style="width:100%;display:none;">
        <div class="clar"> </div>
         {if isset($userInfo->ExchangePower) && $userInfo->ExchangePower eq 1}
          <ul>  
          {if isset($product->LimitStatus) && $product->LimitStatus}
            <li>本产品还剩：<span id="limitNumber" class="limitNum">0</span>张</li>
          {/if}
            <li><span class="l">数量：</span>
            <div class="l">
				<span id="cutNumber" class="minussign l main_r10"></span>
				<span class="l main_r10">
				<input id="txtCount" class="width30px" type="text" style="color: rgb(0, 0, 0); font-weight: bold;" value="1" onkeyup="this.value=this.value.replace(/\D/g,'')">
				</span>
				<span id="addNumber" class="plus l"></span>
			</div>
			</li>
          </ul>
          <div class="bottom_cn r margin_r25">
          {if !$Enabled}
         	 该商品已经下架,请购买其它商品！
          {else}  
          	<input id="ToShopping" type="button"  value="立即购买" class="bottom2 margin_r10"/>
          	{if  isset($showShoppingCard)}
            {else}
            	<input id="addToShoppingCar" type="button"  value="添加到购物车" class="bottom3"/>
            {/if}
            <a  target="xinfuka_frame" id="link" style="display:none"></a>
          {/if}
          </div>
           <!--添加成功提示-->
          <div id="alertdiv"></div>
          <!--提示结束--> 
          {else}
          	 您没有购买商品的权限！ 
          {/if}
        </div>
        
      </div>
      </div>
      
    </div>
    <div class="clar"></div>
    <script src="{$host}/Js/BuyCards/thickbox_plus.js" type="text/javascript"></script>
    <div id="detail">
      <ul id="J_TabBar">
        <li class="selected"> <a href="#description">产品描述</a> </li>
        <li style="display:none"> <a href="#J_Reviews"> 意见反馈 </a> </li>
      </ul>
      <div class="detail_cn" id="description" style="min-height:290px;">
  		{$product->Description}</div>
    </div>
  </div>
  <div class="clar"></div>
</div>
	<input type="hidden" id="hidstatus" class="status" value='{$status}' />
    <input type="hidden" id="hidishot" class="iscg" value='{$iscg}' />
    <input type="hidden" id="hidiszk" class="iszk" value='{$iszk}' />
    <input type="hidden" id="hidiscg" class="ishot" value='{$ishot}' />
{widget name="default:widget/notice/notice.tpl"}

    <script type="text/javascript">
    var priceRanage = 0;
    var tagName = '';
    var orderBy = 1;
    var method = 0;
    var ppClass = '';
    var proAcount = 0;
	var limitStatus="{$status}";

	//goodsNotice.tpl里面用到的这个函数
	function getGoodsInfo(){
		var aSelectedElement = $('#attributeValue li[class="tb-selected"] a');
		var skuId = aSelectedElement.children('span').attr('id');
		var productId = $("#productDetails").attr("data-productId");
		return  new Array(productId,skuId);
	}
	
    function LoadSkuInfo() {
    	var aSelectedElement = $('#attributeValue li[class="tb-selected"] a');
    	if(aSelectedElement.length > 0){
	    	var skuId = aSelectedElement.children('span').attr('id');
	    	
	        $.ajax({
	            url: baseUrl+'/api/product/GetSkuInfo',
	            data: { 'skuId': skuId },
	            type: 'POST',
	            dataType: 'json',
	            timeout: 0,
	            error: function() {
	            },
	            success: function(data, textStatus) {
	                if (!data) {
	                	$('#shoppingBlock').show();
	                	$("body").css("cursor", "default");
	                    return ;
		            }
	                var attributeStr;
	                //$('#description').html("");
					//$('#description').html(data.Description);
	                $("#XinfuPrice").text(parseFloat(data.XFPrice).toFixed(2));
	                if (parseInt(data.LimitQuatity) < 1 && status == 'False') {
	                	$("#shoppingBlock").show();
	                    $(".limitNum").text("0");
	                    $(".bottom2").addClass('buttongray');
	                    $("#ToShopping").unbind("click");
	                    $(".bottom3").addClass('buttongray2');
	                    $("#addToShoppingCar").unbind("click");
	                }else {
	                	var weekLimit=data.AddedQuantity=="NULL"? 0 : data.AddedQuantity;
	                    $('#addedQuantity').text(weekLimit);
	                    if(data.LimitQuatity <1){
	                    	if(!$("#shoppingBlock").is(":hidden")){
	                    		$("#shoppingBlock").hide();
	                		}
	                    	$("#warning_blcok").remove(); //删除
 
	                    	$("#shoppingBlock").before("<div id='warning_blcok' style='background:#FFFAE1;padding:5px 15px;'><p>此面值本周预算供应量已售完，欢迎您下周购买！</p><p>如有其他疑问，请联系客服：400-678-9393</p></div>");
                    		$("#goodsNotice").css("display","block");	//显示到货通知 
	                    }else{
                    		$("#goodsNotice").css("display","none"); //隐藏到货通知 
	                    	$("#warning_blcok").remove();
	                    	$("#shoppingBlock").show();
	                    	$("#limitNumber").text(data.LimitQuatity);
		                    $(".bottom3").removeClass('buttongray2');
		                    $(".bottom2").removeClass('buttongray');
		                    $("#ToShopping").unbind("click");
		                    $("#addToShoppingCar").unbind("click");
		
		                    $("#ToShopping").bind("click", function() { getTotalBalance(false); });
		                    $("#addToShoppingCar").bind("click", function() { getTotalBalance(true); });
	                	}
	                	
	                }
	                $(".attributeList").empty();
	                if (!data.Enabled) {
	                    $(".property").css("display", "none");
	                }
	                else {
	                    $(".property").css("display", "block");
	                }
					if (data.AttributeValueList != null) {
		                for (var i = 0; i < data.AttributeValueList.length; i++) {
		                    attributeStr = "";
		                    attributeStr += "<span style='margin-left:35px;'>" + data.AttributeValueList[i].AttributeName + "：</span>";
		                    attributeStr += "<span style='margin-left:5px;'>" + data.AttributeValueList[i].AttributeValue + "</span>";
		                    $(".attributeList").append(attributeStr);
		                }
					}
	                $("body").css("cursor", "default");
	            },
	            beforeSend: function() {
	                $("body").css("cursor", "wait");
	            }
	        });
    	}else{
			//商品全部下架，不存在sku
    		$(".bottom2").addClass('buttongray');
            $("#ToShopping").unbind("click");
            $(".bottom3").addClass('buttongray2');
            $("#addToShoppingCar").unbind("click");
        }
    }
    isAddShoppingCart = false;
    function getTotalBalance(spty){

        if($('#cardType').attr('cardType') == '个性卡'){
			var pass = confirm('尊敬的客户您好，您选择了预订商品，预订商品配送周期为7-15天，请您选择是否继续');
			if(!pass) return false; 
        }
        
    	
        if($("#txtCount").val() < 1){
        	$("#txtCount").val("1");
        	return false;
        }
        
    	if(isAddShoppingCart){
			return false;
        };
        isAddShoppingCart = true;
//    	$.get(baseUrl+'/AsynRequest/GetAccountInfo',{},function(data){
//        	var totalBalance = parseInt(data);
//        	//alert(totalBalance);
//        	
//		});
    	AddShoppingCart(spty,99999);
    }
    function AddShoppingCart(spty,totalBalance) {
		
        var liSelectedElement = $('#attributeValue li[class="tb-selected"]');
    	var skuId = liSelectedElement.children('a').children('span').attr('id');
        var status = $(".status").val();
        var ishot = $(".ishot").val();
        var iszk = $(".iszk").val();
        var iscg = $(".iscg").val();
        var type = $(".type").val();
        var name = $(".name").val();
        var count = $("#txtCount").val();
        $.ajax({
            url: '{$host}'+'/Handler/ShoppingCart.ashx?r=' + Math.random(),
            data: { 'skuid': skuId, 'status': status, 'ishot': ishot, 'iszk': iszk, 'iscg': iscg, 'count': count, 'type': type, 'name': name },
            type: 'POST',
            dataType: 'text',
            timeout: 0,
            error: function(XMLHttpRequest, textStatus, errorThrown) {
//            	alert(XMLHttpRequest.status);
//                alert(XMLHttpRequest.readyState);
//                alert(textStatus); // paser error;
                isAddShoppingCart = false;
            },
            success: function(data, textStatus) {
            	isAddShoppingCart = false;
              if (!data) { return; }
              var rtn = data.toString().split('|');
              
              if (rtn[0] != "-1") {
                  if (spty) {
                	  var value = rtn[0];
                	  var balance = totalBalance - rtn[1];
                      var spcontent = "<div class=\"alertdiv_nva\"><h3 class=\"l\">放入购物车</h3><div class=\"cloes r\"><span><a href=\"javascript:closediv('alertdiv')\" title=\"关闭\">关闭</a></span></div></div>";
                      spcontent += "<div class=\"alertdiv_cn\">";
                      spcontent += "<div class=\"alertdiv_left\"></div>";
                      spcontent += "<div class=\"alertdiv_right\"><h2 style=\"width:265px;font-size:14px;\">该商品已放入购物车！</h2><div class=\"clar\"></div>";
                      spcontent += "<span>购物车共<font color=\"#ff0000\">"+rtn[0]+"</font>件商品 合计:<font color=\"#ff0000\">"+rtn[1]+"</font></span>";
                      spcontent += "<div class=\"clar\"></div>";
                      //spcontent += "<div>剩余积分: <span class=\"red\">￥"+balance+"</span></div>";
                      spcontent += "</div>";
                      spcontent += "<div class=\"clar\"></div>";
                      spcontent += "<div class=\"forminfo\">";
                      spcontent += "<div class=\"l margin_r10\"><a  target=\"xinfuka_frame\" href=\"{$host}/BuyCards/ShoppingCart.aspx\" class=\"prompt_bottom\">>>去结算</a></div>";
                      spcontent += "<div class=\"l\" onclick=\"closediv('alertdiv')\"><span class=\"bottom-h\">>>继续购物</span></div>";
                      spcontent += "<div class=\"clar\"></div></div></div>";

                      if(value.length > 3){
                          value = value.substring(0,3)+".";
                      }
                      $('#alertdiv').css( 'display','block');
                      $("#ctl00_cartCount")[0].innerHTML = value;
                      
                      $("#alertdiv")[0].innerHTML = spcontent;
                      alertinfo('alertdiv');
	
                      
                  }
                  else {
                	  window.location.href = '{$host}'+'/BuyCards/ShoppingCart.aspx';  
//                      if(navigator.userAgent.indexOf("Gecko/")>0) { 
//                    	  window.location.href = '{$host}'+'/BuyCards/ShoppingCart.aspx';  
//                     }else{
//                    	 var link = document.getElementById('link');
//                         link.href = '{$host}'+'/BuyCards/ShoppingCart.aspx';
//                         link.click();
//                     } 
                  }
              }
              else {
                  alert(rtn[1]);
                  closediv('alertdiv');
              }
            },
            beforeSend: function() {
            	if (spty) {
                  //var spcontnt = "<div style=\"margin-top:40px; margin-left:150px\"><img alt=\"loading\" src=\"/image/loading.gif\" /></div>";
                 // $("#alertdiv")[0].innerHTML = spcontnt;
                  //alertinfo('alertdiv');
              	}
            }
        });
    }
    $(document).ready(function() {
        LoadSkuInfo();
		$('#alertdiv').css( 'display','none');
        $(".thumbnailImage").click(function(event) {
            $("#productImage").find("img").attr("src", $(this).attr("BigSrc"));
        });
		//var limitNumber = $('.limitNum')[0].innerHTML();
		var limitNumber = 90;
		$('#cutNumber').click(function(){
			var currentValue = $("#txtCount").val();
			var newValue;
			var limitNumber = $('.limitNum').text();
			if(currentValue > 1){
				newValue = currentValue - 1;
			}else{
				newValue = currentValue;
			}

			$("#txtCount").val(newValue);
		});
		$('#addNumber').click(function(){
			var currentValue = parseInt($("#txtCount").val());
			var limitNumber = $('.limitNum').text();
			var newValue;
			if(limitNumber != "" && currentValue < limitNumber){ //限购商品
				newValue = currentValue + 1;
			}else if(limitNumber == ""){ //非限购商品
				newValue = currentValue + 1;
			}else{
				newValue = limitNumber;
			}

			$("#txtCount").val(newValue);
		});
    });
	//货到通知
	$("#goodsNotice").click(function(){
		$("#showGoodsNotice").css("display","block");
	});
    
    </script>
    <script type="text/javascript">
        //	$.get(baseUrl+'/AsynRequest/GetRankList',{},function(data){
    	//		$('#rankList').append(data);
    	//	});
		
		$.get(baseUrl+'/AsynRequest/GetRecentList',{},function(data){
			$('#recentList').append(data);
		});
	</script>
	<script type="text/javascript">
		var liElement = $('#attributeValue li');
		liElement.first().addClass("tb-selected");
		liElement.first().append('<i>已选中</i>');
		liElement.click(function(){
			liElement.removeClass("tb-selected");
			liElement.children("i").remove();
			$(this).addClass("tb-selected");
			$(this).append('<i>已选中</i>');
			LoadSkuInfo();
		});
	</script>
	<script type="text/javascript">
		function changeBigPic(obj){ 	
			$('#bigPicToShow').attr('src', $(obj).attr('bigImg'));
		}
	</script>
{/block}