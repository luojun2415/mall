<?php /* Smarty version Smarty-3.1.6, created on 2014-08-26 08:50:06
         compiled from "res/template\default\page\Product\Detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2280853fbd9be247c41-75085542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc198e13e6d17b1dfdf35bfaf60ecb769fccf908' => 
    array (
      0 => 'res/template\\default\\page\\Product\\Detail.tpl',
      1 => 1409013658,
      2 => 'file',
    ),
    '56f7c006da280c3722735cd7743677232d9852b9' => 
    array (
      0 => 'res/template\\default\\page\\layout.tpl',
      1 => 1409013657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2280853fbd9be247c41-75085542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'description' => 0,
    'title' => 0,
    'baseUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53fbd9be93af3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fbd9be93af3')) {function content_53fbd9be93af3($_smarty_tpl) {?><!DOCTYPE html>
<?php if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}FISResource::setFramework(FISResource::getUri("common:static/mod.js", $_smarty_tpl->smarty)); ?><html>
	<head>
		<meta
			content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"
			name="viewport">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<META HTTP-EQUIV="pragma" CONTENT="no-cache">
		<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache, must-revalidate">
		<META HTTP-EQUIV="expires" CONTENT="0">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" name="description">
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<?php if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}FISResource::load("common:static/html5.js",$_smarty_tpl->smarty);?>
		<?php if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}FISResource::load("default:static/lib/css/index.css",$_smarty_tpl->smarty);?>
		<?php if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}FISResource::load("default:static/lib/css/user/person.css",$_smarty_tpl->smarty);?>
		<?php if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}FISResource::load("common:static/jquery-1.8.1.min.js",$_smarty_tpl->smarty);?>
		<?php if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}$_tpl_path=FISResource::getUri("common:widget/http/http.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array('data'=>$_smarty_tpl->tpl_vars['baseUrl']->value), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."common:widget/http/http.tpl".'"', E_USER_ERROR);}FISResource::load("common:widget/http/http.tpl", $_smarty_tpl->smarty);?>
	<?php if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}echo FISResource::cssHook();?></head>
	<body>
		<?php if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}$_tpl_path=FISResource::getUri("default:widget/header/header.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."default:widget/header/header.tpl".'"', E_USER_ERROR);}FISResource::load("default:widget/header/header.tpl", $_smarty_tpl->smarty);?>
		
<div class="w">
  <div class="currentlocation box bgwhite ">当前位置∶<?php echo $_smarty_tpl->tpl_vars['bread']->value;?>
</div>
</div>
<div class="clar"></div>
<div class="w">  
  <div class="shoplistleft">
  <?php if (isset($_smarty_tpl->tpl_vars['style']->value)&&$_smarty_tpl->tpl_vars['style']->value=='beizhan'){?>
  	 <?php echo $_smarty_tpl->getSubTemplate ("beizhan/LeftNavigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php }elseif(isset($_smarty_tpl->tpl_vars['open529']->value)||isset($_smarty_tpl->tpl_vars['open502']->value)){?> 
  	<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['style']->value)."/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
   
  <?php }else{ ?>
  <!-- 左侧菜单开始 -->
	<div class="shophome_nva" style="height: auto;width:220px;">  
	<ul>	 
  	 <li style="padding:0px 15px;" class="bg_lightblue">
          <div class="navigation_pic navigation_pic_ico1">
            <h3> 弹性福利 </h3>
            <span class="text_12 orange text_bold">（礼卡积分）</span></div>
            	<div class="navigation_cntext">
		        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menu']->value->Info) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
            	   <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/ProductService/NewBusiness/<?php echo $_smarty_tpl->tpl_vars['menu']->value->Info[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->NameBase64;?>
/<?php echo $_smarty_tpl->tpl_vars['menu']->value->Info[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->MenuId;?>
/<?php echo $_smarty_tpl->tpl_vars['menu']->value->Info[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->Childs[0]->UrlEnMenuName;?>
/<?php echo $_smarty_tpl->tpl_vars['menu']->value->Info[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->Childs[0]->Value;?>
/<?php echo $_smarty_tpl->tpl_vars['menu']->value->Info[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->Childs[0]->Type;?>
" ><?php echo $_smarty_tpl->tpl_vars['menu']->value->Info[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]->Name;?>
</a>  
		        <?php endfor; endif; ?>
		        </div>
        </li>
       </ul>
  	 </div>
  	<?php }?>
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
        <img id="bigPicToShow" width="318" height="224" src="<?php echo $_smarty_tpl->tpl_vars['product']->value->DefaultImageUrl;?>
" />
        </div>
        <div class="smallimg">
          <div class="smallpicleft"></div>
          <div class="smallshoppic">
            <ul>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->ProductImageList; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            	<li>
            		<img onclick="changeBigPic(this)" style="cursor:hand;cursor:pointer;" src="<?php echo $_smarty_tpl->tpl_vars['item']->value->ThumbnailUrl;?>
" bigImg="<?php echo $_smarty_tpl->tpl_vars['item']->value->ImageUrl;?>
" border="0"/>
            	</li>
            <?php } ?>
            </ul>
          </div>
          <div class="smallshoppicright"></div>
        </div>
      </div>
      <!--产品内容-->
      <div class="shopcntext" id="cardType" cardType="<?php echo $_smarty_tpl->tpl_vars['product']->value->MerchantName;?>
">
        <h2><?php echo $_smarty_tpl->tpl_vars['product']->value->ProductName;?>
</h2>
        <ul>
          <li>产品编号：<?php echo $_smarty_tpl->tpl_vars['product']->value->ProductCode;?>
</li>
          <li>商户：<?php echo $_smarty_tpl->tpl_vars['product']->value->MerchantName;?>
</li>
          <li><span class="l">面值：</span>
            <ul id="attributeValue" class="skuName tb-prop l" >
            	<?php if (isset($_smarty_tpl->tpl_vars['product']->value->SkuList)&&count($_smarty_tpl->tpl_vars['product']->value->SkuList)>0){?>
            	<?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->SkuList; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?>
            		<?php if (isset($_smarty_tpl->tpl_vars['product']->value->MerchantName)&&$_smarty_tpl->tpl_vars['product']->value->MerchantName=='凡客诚品'){?>
            		<li><a href="#"><span id="<?php echo $_smarty_tpl->tpl_vars['sku']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['sku']->value->SkuName;?>
</span></a></li>
            		<?php }else{ ?>
            		<li><a href="#"><span id="<?php echo $_smarty_tpl->tpl_vars['sku']->value->Id;?>
"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['sku']->value->Price);?>
</span></a></li>
            		<?php }?>
            	<?php } ?>
            	<?php }?>
            </ul>
          </li>
          <li>薪福价：<span id="XinfuPrice">0.00</span></li>
          <li>所属城市：<?php echo $_smarty_tpl->tpl_vars['product']->value->AreaName;?>
 </li>
          <li>本周预算：<span id="addedQuantity"></span>张</li>
          <li id="goodsNotice" style="display: none; cursor: pointer;"> 
          	  <div id="tips">
                  <a href="javascript:void(0);" id="productDetails" data-productId="<?php echo $_smarty_tpl->tpl_vars['product']->value->ProductId;?>
" data-skuId="">
                  	<img src="http://dev.mall.com/res/static/default/page/product/img/goodsNotice.png"/>
                  </a>
              </div>
          </li>
        </ul>
        <div id="limitHandler" class="box shopcn_tj por_relative">
	        <div id="shoppingBlock" style="width:100%;display:none;">
        <div class="clar"> </div>
         <?php if (isset($_smarty_tpl->tpl_vars['userInfo']->value->ExchangePower)&&$_smarty_tpl->tpl_vars['userInfo']->value->ExchangePower==1){?>
          <ul>  
          <?php if (isset($_smarty_tpl->tpl_vars['product']->value->LimitStatus)&&$_smarty_tpl->tpl_vars['product']->value->LimitStatus){?>
            <li>本产品还剩：<span id="limitNumber" class="limitNum">0</span>张</li>
          <?php }?>
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
          <?php if (!$_smarty_tpl->tpl_vars['Enabled']->value){?>
         	 该商品已经下架,请购买其它商品！
          <?php }else{ ?>  
          	<input id="ToShopping" type="button"  value="立即购买" class="bottom2 margin_r10"/>
          	<?php if (isset($_smarty_tpl->tpl_vars['showShoppingCard']->value)){?>
            <?php }else{ ?>
            	<input id="addToShoppingCar" type="button"  value="添加到购物车" class="bottom3"/>
            <?php }?>
            <a  target="xinfuka_frame" id="link" style="display:none"></a>
          <?php }?>
          </div>
           <!--添加成功提示-->
          <div id="alertdiv"></div>
          <!--提示结束--> 
          <?php }else{ ?>
          	 您没有购买商品的权限！ 
          <?php }?>
        </div>
        
      </div>
      </div>
      
    </div>
    <div class="clar"></div>
    <script src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/Js/BuyCards/thickbox_plus.js" type="text/javascript"></script>
    <div id="detail">
      <ul id="J_TabBar">
        <li class="selected"> <a href="#description">产品描述</a> </li>
        <li style="display:none"> <a href="#J_Reviews"> 意见反馈 </a> </li>
      </ul>
      <div class="detail_cn" id="description" style="min-height:290px;">
  		<?php echo $_smarty_tpl->tpl_vars['product']->value->Description;?>
</div>
    </div>
  </div>
  <div class="clar"></div>
</div>
	<input type="hidden" id="hidstatus" class="status" value='<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
' />
    <input type="hidden" id="hidishot" class="iscg" value='<?php echo $_smarty_tpl->tpl_vars['iscg']->value;?>
' />
    <input type="hidden" id="hidiszk" class="iszk" value='<?php echo $_smarty_tpl->tpl_vars['iszk']->value;?>
' />
    <input type="hidden" id="hidiscg" class="ishot" value='<?php echo $_smarty_tpl->tpl_vars['ishot']->value;?>
' />
<?php if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}$_tpl_path=FISResource::getUri("default:widget/notice/notice.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."default:widget/notice/notice.tpl".'"', E_USER_ERROR);}FISResource::load("default:widget/notice/notice.tpl", $_smarty_tpl->smarty);?>

    <script type="text/javascript">
    var priceRanage = 0;
    var tagName = '';
    var orderBy = 1;
    var method = 0;
    var ppClass = '';
    var proAcount = 0;
	var limitStatus="<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
";

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
            url: '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
'+'/Handler/ShoppingCart.ashx?r=' + Math.random(),
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
                      spcontent += "<div class=\"l margin_r10\"><a  target=\"xinfuka_frame\" href=\"<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/BuyCards/ShoppingCart.aspx\" class=\"prompt_bottom\">>>去结算</a></div>";
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
                	  window.location.href = '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
'+'/BuyCards/ShoppingCart.aspx';  
//                      if(navigator.userAgent.indexOf("Gecko/")>0) { 
//                    	  window.location.href = '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
'+'/BuyCards/ShoppingCart.aspx';  
//                     }else{
//                    	 var link = document.getElementById('link');
//                         link.href = '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
'+'/BuyCards/ShoppingCart.aspx';
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

		<?php if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}$_tpl_path=FISResource::getUri("default:widget/footer/footer.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."default:widget/footer/footer.tpl".'"', E_USER_ERROR);}FISResource::load("default:widget/footer/footer.tpl", $_smarty_tpl->smarty);?>
	</body><?php if(class_exists('FISResource')){echo FISResource::render('js');echo FISResource::renderScriptPool();}?>
<?php $_smarty_tpl->registerFilter('output', array('FISResource', 'renderResponse'));?></html>
<?php }} ?>