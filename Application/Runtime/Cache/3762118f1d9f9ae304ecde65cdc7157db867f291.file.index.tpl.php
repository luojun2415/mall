<?php /* Smarty version Smarty-3.1.6, created on 2014-08-26 08:49:06
         compiled from "res/template\default\page\Index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1657053fbd982753586-39394964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3762118f1d9f9ae304ecde65cdc7157db867f291' => 
    array (
      0 => 'res/template\\default\\page\\Index\\index.tpl',
      1 => 1409013657,
      2 => 'file',
    ),
    '56f7c006da280c3722735cd7743677232d9852b9' => 
    array (
      0 => 'res/template\\default\\page\\layout.tpl',
      1 => 1409013657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1657053fbd982753586-39394964',
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
  'unifunc' => 'content_53fbd982c7000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fbd982c7000')) {function content_53fbd982c7000($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\Users\\John\\Downloads\\thinkphp_3.2.2_full\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html>
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
		
<div class="w" id="changePage">
<?php if (isset($_smarty_tpl->tpl_vars['style']->value)&&$_smarty_tpl->tpl_vars['style']->value=='cuican'){?>
<div>
<img width="1000" height="98" border="0" gid="1" src="<?php echo $_smarty_tpl->tpl_vars['pic_server']->value;?>
/image/<?php echo $_smarty_tpl->tpl_vars['pic_subpath']->value;?>
/ad_QQ.jpg">
</div>
<?php }?>
  <div class="homeleft"> 
    <!--图片切换开始-->
    <div id="slide" class="m" >
    </div> 
    <!--图片切换结束，新闻开始-->
    <div class="clar"></div>
    <div class="homenews">
      <div class="l news_ms box">
        <div class="news_nv">
          <div class="homenews_nv l">行业资讯 </div>
          <div class="homenews_borderbt l w195" style="width: 220px !important;"></div>
          <div class="homenews_moer l" style="margin-top: 0px;"><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/NewsCenter/Index/MS/2/1" id="msMore">MORE</a></div>
        </div>        
        <div class="clr"></div>
        <div class="newsnva_two">
        </div>
        <!-- 异步加载民生新闻和公告 -->
        <div class="homenews_cnlist" id="msInfos">
        	<span class="shoploading" ></span>
        </div>
      </div>	
      <div class="l news_ms box margin_l10">
        <div class="news_nv"> 
        <?php if (smarty_modifier_truncate($_smarty_tpl->tpl_vars['enterpriseInfo']->value->EnterpriseName,2,'')=='民生'){?>
        	<div class="homenews_nv l">幸福人生 </div>
        <?php }else{ ?>
        	<div class="homenews_nv l">薪福卡 </div>
        <?php }?>
          
          <div class="homenews_borderbt l w195" style="width: 240px !important;"></div>
          <div class="homenews_moer l" style="margin-top: 0px;">
          	<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/NewsCenter/Index/XF/2/1" id="xfMore">MORE</a>
          </div>
        </div>
        <div class="clr"></div>
        <div class="newsnva_two">
        </div>
        <!-- 异步加载幸福人生新闻和公告 -->
        <div class="homenews_cnlist_xf" id="xfInfos_news">
        	<span class="shoploading"></span>
        </div>
      </div>
    </div>
    <div class="clar"></div>
  </div>
  <div class="homeright" style="min-height: 477px;">
    <div class="home_faq box" style="height:160px;">
      <div class="home_faq_cn">
        <div class="home_faq_cnnva">公告</div>
        <div id="xfInfos_notice">
        </div>
      </div>
    </div>
    <div class="clr"></div>
    <div><img src="http://dev.mall.com/res/static/default/page/index/ad2.jpg" border="0" gid="1" width="258"  height="57" ></img></div>
    <div class="clar"></div>     
   <div class="bgwhite box"><br><img src="http://dev.mall.com/res/static/default/page/index/ad3.jpg"   gid="1"><br><br></div>
  </div>
  <div class="clar"></div>
 <div class="homeleft">
 <div class="discount box bgwhite"  style="width:100%;"> 
    <div class="discount_nva ">
    	薪福推荐
    </div> 
    
    <div class="discount list">
      <ul>
      	<?php if (isset($_smarty_tpl->tpl_vars['normalProducts']->value)&&count($_smarty_tpl->tpl_vars['normalProducts']->value)>0){?>
      	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['normalProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['num']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['num']['index']++;
?>
      	  <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['num']['index']<3){?>
      	 <li style="width: 33%">
          <div class="list_cn por_relative">
          	<u><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->ProductUrl;?>
" target="_blank">
          	<?php echo $_smarty_tpl->tpl_vars['product']->value->ProductName;?>
</a></u>
            <div class="list_pic">
            	<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->ProductUrl;?>
" target="_blank">
            	<img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->ThumbnailUrl;?>
"/></a>
            </div>
            
            <div class="list_text">
              	<?php if (isset($_smarty_tpl->tpl_vars['product']->value->MinAttributeValue,$_smarty_tpl->tpl_vars['product']->value->MaxAttributeValue)){?> 
					<p>面值：
						<?php if ($_smarty_tpl->tpl_vars['product']->value->MinAttributeValue==$_smarty_tpl->tpl_vars['product']->value->MaxAttributeValue){?>
							<?php echo sprintf('%0.2f',$_smarty_tpl->tpl_vars['product']->value->MaxAttributeValue);?>

						<?php }else{ ?>
							<?php echo sprintf('%0.2f',$_smarty_tpl->tpl_vars['product']->value->MinAttributeValue);?>
 - <?php echo sprintf('%0.2f',$_smarty_tpl->tpl_vars['product']->value->MaxAttributeValue);?>
	
						<?php }?>
					</p>
              		<p class="orange text_v">积分：￥
              		<?php if ($_smarty_tpl->tpl_vars['product']->value->MinXFPrice==$_smarty_tpl->tpl_vars['product']->value->MaxXFPrice){?>
							<?php echo sprintf('%0.2f',$_smarty_tpl->tpl_vars['product']->value->MaxXFPrice);?>

						<?php }else{ ?>
							<?php echo sprintf('%0.2f',$_smarty_tpl->tpl_vars['product']->value->MinXFPrice);?>
 - <?php echo sprintf('%0.2f',$_smarty_tpl->tpl_vars['product']->value->MaxXFPrice);?>
	
						<?php }?>
              		</p>
              <?php }?>
            </div>
            
          </div>
        </li>
        <?php }?>
        <?php } ?>
        <?php }?>
        
      </ul>
    </div>
  </div>
  </div><div class="homeright">
  	<img alt="" class="box" src="http://dev.mall.com/res/static/default/page/index/adxfwx.jpg">
  </div>
  
  <div class="clar"></div>
</div>
<div class="clar"></div>
<!-- 
           新闻与动态互切换
 -->
 <?php if ($_smarty_tpl->tpl_vars['isFirstImgShow']->value!='already'&&isset($_smarty_tpl->tpl_vars['foodgray']->value)){?>
 <div id="advPopupWindow" class="ad3650830" style="position:fixed">
	<a href="javascript:void(0)"  id="closeButton"><img src="<?php echo $_smarty_tpl->tpl_vars['cssUrlPath']->value;?>
/image/close.png" /></a>
</div>
<?php }?>
<library>

<script>
          	
var lastHeight = 0;
var iframeWin = false;
var host = '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
';
var renkeHTML ="<img src='<?php echo $_smarty_tpl->tpl_vars['pic_server']->value;?>
/image/<?php echo $_smarty_tpl->tpl_vars['pic_subpath']->value;?>
/renke.jpg'>";
var renkeShow = '<?php echo $_smarty_tpl->tpl_vars['renkeShow']->value;?>
';
var isFirstImgShow = '<?php echo $_smarty_tpl->tpl_vars['isFirstImgShow']->value;?>
';
var foodgray = '<?php echo $_smarty_tpl->tpl_vars['foodgray']->value;?>
';
//显示民生新闻
$.get(baseUrl+'/NewsCenter/GetHomeNewsAndNotice/MS/2/1',{},function(data){
	$("#msInfos").html(data);
});
//幸福人生新闻
$.get(baseUrl+'/NewsCenter/GetHomeNewsAndNotice/XF/2/1',{},function(data){
	$("#xfInfos_news").html(data);
});
//幸福人生公告
$.get(baseUrl+'/NewsCenter/GetHomeNewsAndNotice/XF/0/1',{},function(data){
	$("#xfInfos_notice").html(data);
});
//首页轮播图
$.post(baseUrl+'/AsynRequest/GetSlideList',{},function(result){
	$("#slide").html(result);
});
//幸福人生公告
$.get(baseUrl+'/NewsCenter/GetHomeNewsAndNotice/XF/0/1',{},function(data){
	$("#xfInfos_notice").html(data);
});

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

$("#irenke").click(function(){
	
	if(renkeShow == 1){
		var content = "<iframe id='autoResize' name=autoResize width='1000px' height='0px'  scrolling=no frameborder='0'  src='http://www.xinfuka.net/renke/'  onload='hello()'></iframe>";
		$("#changePage").html(content);
		return;
	 }
	 $("#changePage").html(renkeHTML);
	
});

$("#jrenke").click(function(){
	  if(renkeShow == 1){
		  var content = "<iframe id='autoResize' name=autoResize width='1000px' height='0px'  scrolling=no frameborder='0'  src='http://www.xinfuka.net/renke/Publish'  onload='hello()'></iframe>";
			$("#changePage").html(content);
			return;
	  }
	  $("#changePage").html(renkeHTML);


});

</script>
<script>
/* 民生新闻
$("#msNews").mouseenter(function() {
	$("#msNotice").parent().removeClass();
	$(this).parent().addClass("curr");
	$("#showminshengnews").show();
	$("#showminshengpost").hide();
	var href = baseUrl+'/NewsCenter/Index/MS/2/1';
	$('#msMore').attr('href',href);
	$.get(baseUrl+'/NewsCenter/GetHomeNewsAndNotice/MS/2/1',{},function(data){
		$("#msInfos").html(data);
	});
});
*/
/* 民生公告
$("#msNotice").mouseenter(function() {
	$(this).parent().addClass("curr");
	$("#msNews").parent().removeClass();
	$("#showminshengnews").hide();
	$("#showminshengpost").show();
	var href = baseUrl+'/NewsCenter/Index/MS/0/1';
	$('#msMore').attr('href',href);
	$.get(baseUrl+'/NewsCenter/GetHomeNewsAndNotice/MS/0/1',{},function(data){
		$("#msInfos").html(data);
	});
});
*/
/*薪福新闻
$("#xfNews").mouseenter(function() {
	$("#xfNotice").parent().removeClass();
	$(this).parent().addClass("curr_xf");
	$("#showxfsdnews").show();
	$("#showxfsdpost").hide();
	var href = baseUrl+'/NewsCenter/Index/XF/2/1';
	$('#xfMore').attr('href',href);
	$.get(baseUrl+'/NewsCenter/GetHomeNewsAndNotice/XF/2/1',{},function(data){
		$("#xfInfos").html(data);
	});
});
*/

/*薪福公告
$("#xfNotice").mouseenter(function() {
	$(this).parent().addClass("curr_xf");
	$("#xfNews").parent().removeClass();
	$("#showxfsdpost").show();
	$("#showxfsdnews").hide();
	var href = baseUrl+'/NewsCenter/Index/XF/0/1';
	$('#xfMore').attr('href',href);
	$.get(baseUrl+'/NewsCenter/GetHomeNewsAndNotice/XF/0/1',{},function(data){
		$("#xfInfos").html(data);
	});
});
*/
</script>


<script type="text/javascript">
	if(isFirstImgShow != 'already' && foodgray != ''){
		require(['Alert'],function(Alert){
			new Alert({
				 'alertId' : 'advPopupWindow',  //弹出框id
				  'titleId' : '',  //标题id
				  'closeId' : 'closeButton',  //关闭id
				  'contentId' : '',  //内容id
				  'title'   : '',  //标题
				  'content' : '',  //内容
				  'isMask'  : true  //是否需要遮罩层
			});
		});
	}

</script>
<!-- 首次访问或登录的指引交互结束-->

</library>

		<?php if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}$_tpl_path=FISResource::getUri("default:widget/footer/footer.tpl",$_smarty_tpl->smarty);if(isset($_tpl_path)){echo $_smarty_tpl->getSubTemplate($_tpl_path, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, $_smarty_tpl->caching, $_smarty_tpl->cache_lifetime, array(), Smarty::SCOPE_LOCAL);}else{trigger_error('unable to locale resource "'."default:widget/footer/footer.tpl".'"', E_USER_ERROR);}FISResource::load("default:widget/footer/footer.tpl", $_smarty_tpl->smarty);?>
	</body><?php if(class_exists('FISResource')){echo FISResource::render('js');echo FISResource::renderScriptPool();}?>
<?php $_smarty_tpl->registerFilter('output', array('FISResource', 'renderResponse'));?></html>
<?php }} ?>