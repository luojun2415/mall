<?php /* Smarty version Smarty-3.1.6, created on 2014-08-26 08:41:01
         compiled from "res/template\default\page\product\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:886553fb32cb3130a2-97798448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b0f0afaa227b99767d12a6573d5a1f9f438a1fb' => 
    array (
      0 => 'res/template\\default\\page\\product\\index.tpl',
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
  'nocache_hash' => '886553fb32cb3130a2-97798448',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53fb32cb88daf',
  'variables' => 
  array (
    'description' => 0,
    'title' => 0,
    'baseUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fb32cb88daf')) {function content_53fb32cb88daf($_smarty_tpl) {?><!DOCTYPE html>
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
		
<div  id="serviceContent">
<div class="w">
  
  <div class="shophome_nva l border_rsolid box bgwhite" style="height:auto;">
  <h3>服务类别</h3>
  <?php if (isset($_smarty_tpl->tpl_vars['liaoyangEnterpriseId']->value)){?>
  <?php echo $_smarty_tpl->getSubTemplate ('productService/ShowLiaoyangEnterprise.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php }else{ ?>
  <ul>
       <li style="padding:0px 15px;">
          <div class="navigation_pic navigation_pic_ico3">
            <h3><a  href="javascript:void(0)">员工认可</a></h3>
          </div>
          <div class="navigation_cntext">
          	<a id="irenke" href="javascript:void(0)">生日认可</a>
          	  <?php if (isset($_smarty_tpl->tpl_vars['allowEmoployRenke']->value)){?>
	          	<a id="jrenke" href="javascript:void(0)">奖励认可</a><br>
	          <?php }?>
	        <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/TrainRenke">培训认可</a>
            </div>
          
        </li>
        
        
        <li class="bg_lightblue" style="padding:0px 15px;">
          <div class="navigation_pic navigation_pic_ico1">
            <h3>弹性福利</h3>
            <span class="text_12 orange text_bold">(礼卡积分)</span></div>
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
        
        <?php if (isset($_smarty_tpl->tpl_vars['allowElongHotel']->value)||isset($_smarty_tpl->tpl_vars['allowElongPlane']->value)||isset($_smarty_tpl->tpl_vars['liaoyangEnterpriseId']->value)){?>
        <li class=" " style="padding:0px 15px;">
            <div class="navigation_pic navigation_pic_ico5">
              <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/liaoyang/Hotel"><h3>疗养</h3></a><?php if (isset($_smarty_tpl->tpl_vars['open529']->value)){?><span class="text_12 orange text_bold">（疗养积分）</span><?php }?>
            </div>
            
             <div class="navigation_cntext">
             <?php if (isset($_smarty_tpl->tpl_vars['allowElongHotel']->value)){?>
             <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/liaoyang/Hotel">酒店预订 </a> 
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['allowElongPlane']->value)){?>
	          <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/liaoyang/Plane">机票预订</a> <br>
	         <?php }?>
	         <?php if (isset($_smarty_tpl->tpl_vars['allowBookDinner']->value)){?>
	          <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/daojia/Dinner">薪福订餐</a> <br>
	        <?php }?>
          </div>
        </li>
		<?php }?>
      </ul>
      <?php }?>
     
      <!--广告开始-->
      <div class="xilian_div">
      	<ul class="xilian_ul">
      	 	<!--充值开始-->
      		<li class="xilian_li">
			    <?php if (!in_array($_smarty_tpl->tpl_vars['enterpriseId']->value,$_smarty_tpl->tpl_vars['noRecharge']->value)){?>
			    <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Search/Index/空中/1">
				<img src="http://dev.mall.com/res/static/default/page/product/ad/ad6.jpg" width="213px"/></a>
			
			    <?php }?>
			 </li>
			 <!--充值结束-->
			 
			 <!-- 薪福亚马逊乐享卡 开始 -->
			 <li class="xilian_li">
			    <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Search/Index/美通卡/1">
				<img width="213px;"   src="http://dev.mall.com/res/static/default/page/product/ad/mtk.png"/></a>
			 </li>
			  <!-- 薪福亚马逊乐享卡 结束 -->
			  
			 <!--薪福客户端  开始-->
			 <li class="xilian_li">
			    <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Search/Index/食材/1">
				<img width="213px;"   src="http://dev.mall.com/res/static/default/page/product/ad/dthsc.png"/></a>
			 </li>
			  <!-- 薪福客户端 结束-->
			 
			 <!--二维码充值 --> 
			 <li class="xilian_li">
				<img width="213px;"   src="http://dev.mall.com/res/static/default/page/product/ad/ad3.jpg"/>
			 </li>
			 <!-- 二维码--100充值 -->
		</ul>
      </div>
      </div>
     
 
     
      
  <div class="homeright homeright_new box bgwhite">
  <div> <!--顶部产品广告-->
      <div id="slideP" class="border_bsolid l">
      </div>
	    <div class="box"  >
	     	<a href="#">
	     		<img style="width: 258px;" src="http://dev.mall.com/res/static/default/page/product/ad/ad1312.gif"/>
	     	</a>
	    </div>
   </div>
   
    <!--  热销卡-->
    <div class="products_r_hot">
 		<div class="discount_nva ">
	 		<div class="homenews_nv l">热销卡</div> 
	 		<div class="homenews_borderbt l"></div>
	        <div class="homenews_moer l">
	          <a class="" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/ProductService/NewBusiness/<?php echo $_smarty_tpl->tpl_vars['menu']->value->hotProducts['Products_FathName'];?>
/<?php echo $_smarty_tpl->tpl_vars['menu']->value->hotProducts['Products_FathId'];?>
/<?php echo $_smarty_tpl->tpl_vars['menu']->value->hotProducts['Products_SonName'];?>
/<?php echo $_smarty_tpl->tpl_vars['menu']->value->hotProducts['Products_SonId'];?>
">
	          	MORE                                                              
	          </a>
	        </div>
        </div>
        <div class="clr"></div>
        <div class="list">
	        <span id="hotProducts">
	 		</span>
    	</div>
  	</div>
    <!--  热销卡结束-->
    <!--  常规卡-->
    <div class="products_r_hot">
 		<div class="discount_nva ">
	 		<div class="homenews_nv l">常规卡</div> 
	 		<div class="homenews_borderbt l"></div>
	        <div class="homenews_moer l">
	          <a class="" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/ProductService/NewBusiness/<?php echo $_smarty_tpl->tpl_vars['menu']->value->commonProducts['Products_FathName'];?>
/<?php echo $_smarty_tpl->tpl_vars['menu']->value->commonProducts['Products_FathId'];?>
/<?php echo $_smarty_tpl->tpl_vars['menu']->value->commonProducts['Products_SonName'];?>
/<?php echo $_smarty_tpl->tpl_vars['menu']->value->commonProducts['Products_SonId'];?>
">
	          	MORE
	          </a>
	        </div>
        </div>
        <div class="clr"></div>
        <div class="list">
	        <span id="commonProducts">
	 		</span>
    	</div>
  	</div>
    <!--  常规卡结束-->
    <!--  预定卡-->
    <div class="products_r_hot">
 		<div class="discount_nva ">
	 		<div class="homenews_nv l">预订卡</div> 
	 		<div class="homenews_borderbt l"></div>
	        <div class="homenews_moer l">
	          <a class="" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/ProductService/NewBusiness/<?php echo $_smarty_tpl->tpl_vars['menu']->value->destineProducts['Products_FathName'];?>
/<?php echo $_smarty_tpl->tpl_vars['menu']->value->destineProducts['Products_FathId'];?>
/<?php echo $_smarty_tpl->tpl_vars['menu']->value->destineProducts['Products_SonName'];?>
/<?php echo $_smarty_tpl->tpl_vars['menu']->value->destineProducts['Products_SonId'];?>
">
	          	MORE
	          </a>
	        </div>
        </div>
        <div class="clr"></div>
        <div class="list">
	        <span id="destineProducts">
	 		</span>
    	</div>
  	</div>
    <!--  预定卡结束-->
    
    
  </div>
</div>
</div>
 <!-- 认可系统 -->
  <script>
	var imgHtml = "<img src='ad/build.jpg'  />";
	var renkeHTML ="<img src='ad/renke.jpg'>";
	var renkeShow = '<?php echo $_smarty_tpl->tpl_vars['renkeShow']->value;?>
';

	  $("#irenke").click(function(){
		  if(renkeShow == 1){
			  var content = "<iframe id='autoResize' name=autoResize width='1000px' height='0px'  scrolling=no frameborder='0'  src='http://www.xinfuka.net/renke/'  onload='hello()'></iframe>";
				$("#serviceContent").html(content);
				return;
		  }
		  $("#serviceContent").html(renkeHTML);


		});
	  $("#jrenke").click(function(){
		  if(renkeShow == 1){
			  var content = "<iframe id='autoResize' name=autoResize width='1000px' height='0px'  scrolling=no frameborder='0'  src='http://www.xinfuka.net/renke/Publish'  onload='hello()'></iframe>";
				$("#serviceContent").html(content);
				return;
		  }
		  $("#serviceContent").html(renkeHTML);


	  });
		
	  $(".postGift").live('click',function(){
			var content = "<iframe id='autoResize' name=autoResize width='1050px' height='0px'  scrolling=no frameborder='0'  src='http://www.xinfuka.net/renke/Gift/Index'  onload='hello()'></iframe>";
			$("#serviceContent").html(content);


		});
	  $(".more").live('click',function(){
			var content = "<iframe id='autoResize' name=autoResize width='1050px' height='0px'  scrolling=no frameborder='0'  src='http://www.xinfuka.net/renke/'  onload='hello()'></iframe>";
			$("#serviceContent").html(content);


		});

		var lastHeight = 0;
		var iframeWin = false;
		function callback(win){
			iframeWin = win;
			setInterval('iframeResize()', 100);
		}

		function iframeResize(){
			if(iframeWin){
				var height = iframeWin.document.documentElement.scrollHeight || iframeWin.document.body.scrollHeight;
				if(height == lastHeight){
					return;
				}
				lastHeight = height;
				$("#autoResize").height(height);
			}
		}

		</script>
<?php ob_start(); ?>
$(function($) {
	//热销卡
	$.get('<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Product/Flex/id/1?r='+Math.random(),{},function(data){
		$('#hotProducts').html(data);
	});
	//常规卡
	$.get('<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Product/Flex/id/0?r='+Math.random(),{},function(data){
		$('#commonProducts').html(data);
	});
	//预定卡
	$.get('<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Product/Flex/id/2?r='+Math.random(),{},function(data){
		$('#destineProducts').html(data);
	});
});
<?php $script=ob_get_clean();if($script!==false){if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}FISResource::addScriptPool($script);}?>

		<?php if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}$_tpl_path=FISResource::getUri("default:widget/footer/footer.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."default:widget/footer/footer.tpl".'"', E_USER_ERROR);}FISResource::load("default:widget/footer/footer.tpl", $_smarty_tpl->smarty);?>
	</body><?php if(class_exists('FISResource')){echo FISResource::render('js');echo FISResource::renderScriptPool();}?>
<?php $_smarty_tpl->registerFilter('output', array('FISResource', 'renderResponse'));?></html>
<?php }} ?>