<?php /* Smarty version Smarty-3.1.6, created on 2014-08-26 08:41:02
         compiled from "res/template\default\widget\footer\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:929753fb235c687a89-79089984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc3ca0c3be70c89c5e2bda9cedc3fefec66295c4' => 
    array (
      0 => 'res/template\\default\\widget\\footer\\footer.tpl',
      1 => 1409013659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '929753fb235c687a89-79089984',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53fb235c7935c',
  'variables' => 
  array (
    'style' => 0,
    'tagId' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fb235c7935c')) {function content_53fb235c7935c($_smarty_tpl) {?><?php if (!isset($_smarty_tpl->tpl_vars['style']->value)){?>
<div class="w">
  <div class="foolt home_recently box bgwhite">
    <div class="foolt_phone"><IMG height=121   src="http://dev.mall.com/res/static/default/widget/footer/footerpho.jpg" width=238 
border=0></div>
    <div id="help" >
      <div class="pichlep"> <img src="http://dev.mall.com/res/static/default/widget/footer/help2.jpg" /></div>
      <ul>
        <h3>购物指南</h3>
        <li><a id="shoppingGuide" href="javascript:void(0)" onclick="customServiceShow('CustomService/GetZhuanqugouwu/Index')">专区购物</a></li>
        <li><a id="shoppingGuide" href="javascript:void(0)" onclick="customServiceShow('CustomService/GetZhuanqugouwu/ShoppingFlow')">购物流程</a></li>
        <li><a id="shoppingGuide" href="javascript:void(0)" onclick="customServiceShow('CustomService/GetZhuanqugouwu/NormalProblem')">常见问题</a></li>
      </ul>
      <div class="pichlep"> <img src="http://dev.mall.com/res/static/default/widget/footer/help3.jpg"  /></div>
      <ul>
        <h3>配送方式</h3>
        <li><a id="visitExtract" href="javascript:void(0)" onclick="customServiceShow('CustomService/GetShangwenziti')">上门自提</a></li>
        <li><a id="dispatching" href="javascript:void(0)" onclick="customServiceShow('CustomService/GetKuaidiyunshu')">快递运输</a></li>
        <li><a id="dispatchingSelect" href="javascript:void(0)" onclick="customServiceShow('CustomService/GetPeisongchaxun')">配送查询须知</a></li>
      </ul>
      <div class="pichlep"> <img src="http://dev.mall.com/res/static/default/widget/footer/help5.jpg"  /></div>
      <ul>
        <h3>售后服务</h3>
        <li><a href="javascript:void(0)" onclick="customServiceShow('CustomService/Shouhoufuwuzhengce')">售后服务政策</a></li>
        <li><a href="javascript:void(0)" onclick="customServiceShow('CustomService/Piliangxiadan')">批量下单售后规则</a></li>
        <li><a href="javascript:void(0)" onclick="customServiceShow('CustomService/Lianxikefu')">联系客服</a></li>
      </ul>
    </div>
    <div id="footer">
      <div class="footer_cn">
        <div class="clar"></div>
        <div class="clar"></div>
        客服热线：400-678-9393 销售部：010-84885809 010-84885909
        
        非工作时间联系电话：18801284410
        <br>
        Copyright © 2004-2013 薪福卡公司 版权所有 京ICP备10218204号 京ICP证110135号 京公海网安备110108000889号 <img src="http://dev.mall.com/res/static/default/widget/footer/beian.jpg" border="0" align="absmiddle" /></div>
      <div class="clar"></div>
    </div>
  </div>
</div>

<!-- 面包屑脚本
	<script type="text/javascript">
		$(function(){
			$('#breadCrumb').children('a').last().addClass('orange');
		});
	</script>
 -->	
<!-- 横条导航 -->
	<?php ob_start(); ?>
		$(function(){
			var tagId = '<?php echo $_smarty_tpl->tpl_vars['tagId']->value;?>
';
			var id = tagId.match(/\d+/);
			//取消导航标签样式
			var nav = $('#coorper3nva a');
			nav.removeAttr('class');

//			var str = '#coorper3nva li:nth-child('+id+')'+' a';
			var str = '#'+tagId;
			var selectItem = $(str);
			selectItem.addClass('movedcurr');
		});
	<?php $script=ob_get_clean();if($script!==false){if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}FISResource::addScriptPool($script);}?>
	
<!-- footer客户服务 -->
<script type="text/javascript">
	function customServiceShow(customUrl) {
	location.href = baseUrl+"/"+customUrl;
}
</script>
<!-- 客户服务 -->
<!-- 1. 左测链接外层DIV
	 2. 加载页面 -->
<?php ob_start(); ?>
function addThisUrlToNav(thisDIV,skipUrl){	
	
	var 
		nowId = thisDIV, 
		nowSkipUrl = skipUrl, 
	    nowNav = $(nowId).text();
	$.get(baseUrl+'/'+nowSkipUrl,{},function(data){
		$('#content').html(data);
		$('#nowPosition').text('当前位置：客户服务 > ' +nowNav);	
		$("#nowId").parent().addClass('orange');
			 								
	});
}


<?php $script=ob_get_clean();if($script!==false){if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}FISResource::addScriptPool($script);}?>
<div class="qq_zx">
	<script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzgwMDA2MTg3NF8xNDgzOV84MDAwNjE4NzRf"></script>
</div>
<!--百度流量统计代码--> 
        
 	<?php ob_start(); ?>
		var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
		document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F5697e470981908cea5d27d1fb7c7ee0e' type='text/javascript'%3E%3C/script%3E"));
	<?php $script=ob_get_clean();if($script!==false){if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}FISResource::addScriptPool($script);}?> 
</body>
</html>
<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['style']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php }} ?>