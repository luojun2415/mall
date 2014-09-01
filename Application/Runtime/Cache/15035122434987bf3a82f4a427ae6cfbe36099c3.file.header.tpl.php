<?php /* Smarty version Smarty-3.1.6, created on 2014-08-27 09:05:18
         compiled from "res/template\default\widget\header\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2188053fb235c3d06d8-92693503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15035122434987bf3a82f4a427ae6cfbe36099c3' => 
    array (
      0 => 'res/template\\default\\widget\\header\\header.tpl',
      1 => 1409101420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2188053fb235c3d06d8-92693503',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53fb235c66e42',
  'variables' => 
  array (
    'host' => 0,
    'key' => 0,
    'isFirstLogin' => 0,
    'user' => 0,
    'enterpriseId' => 0,
    'baseUrl' => 0,
    'areaName' => 0,
    'giftCardsId' => 0,
    'wejEnterpriseId' => 0,
    'logogrey' => 0,
    'pic_server' => 0,
    'enterpriseInfo' => 0,
    'agcodValid' => 0,
    'paycarCount' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fb235c66e42')) {function content_53fb235c66e42($_smarty_tpl) {?>			<?php ob_start(); ?>
				var header = require('default:widget/header/header.js');
				$(function(){
					function search() {
		                var value = $.trim($("#search_text").val());
		                if (value == "请输入您要搜索的卡或是商品信息" || value == "") {
		                    alert("请输入搜索关键词！");
		                }
		                else if(!checkSpecialCharacter(value)){
		                    $("#search_text").attr("value","").focus();
		                }
		                else {
		                    RedirectSearchResultPage(value);
		                }
		                return false;
		            }
		
					function checkSpecialCharacter(inputValue){
						var str = inputValue;
						var SPECIAL_STR = "￥#$~!@%^&*;'\"?<?php ?>><[]{}\\|,:/=+-“”‘：";
						for(i=0; i < str.length; i++){
							if(SPECIAL_STR.indexOf(str.charAt(i)) != -1){
								return false;
							}
						}
						return true;
					}
					
		            $("#search_bottom").click(function() {
		                return search();
		            });
		
		            $("#go").keydown(function(e) {
		                if (e.keyCode == 13) {
		                    return search();
		                }
		            });
					
					});
				function enterln(evt){
			        var evt = evt?evt:(window.event?window.event:null);
			        if(evt.keyCode==13){
			            document.getElementById("search_bottom").click();
			            return false;
			         }
			     };
		
				function RedirectSearchResultPage(keyWord) {
		        	//var url = '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
'+"/Enterprise/UserCardSearch.aspx?keyWord=" + escape(keyWord) + "&key="+'<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
';
					var url = baseUrl+"/Search/Index/" + keyWord + '/1';
		            window.location.href = url;
		        };
		        
			<?php $script=ob_get_clean();if($script!==false){if(!class_exists('FISResource')){require_once('C:/Users/John/Downloads/thinkphp_3.2.2_full/Application/Common/Lib/Smarty/plugins/FISResource.class.php');}FISResource::addScriptPool($script);}?>
		</head>
		<body>
		<?php if (isset($_smarty_tpl->tpl_vars['isFirstLogin']->value)&&($_smarty_tpl->tpl_vars['isFirstLogin']->value==true)){?>
			<!--引导开始-->
			<div class="SI_Guide_Bg_w" id='guide_page'>
			  <div id="SI_Guide_Bg" class="guide-bg" style="height: 1916px;"></div>
			  <div id="SI_Guide_Wrap" class="guide-wrap" style="">
			    <div class="guide-step03">
			      <div class="guide-step03-bg"></div>
			      <div class="guide_top clearfix"><a href="#"  class="text_bold orange">我的账户</a> | <a href="#"  class="text_bold orange">我的订单</a></div>
			      <div class="allclose"><a id="guide_allclose" class="allclosebt" onclick="document.getElementById('guide_page').style.display='none';">全部关闭</a></div>
			    </div>
			  </div>
			  <script type='text/javascript'>
			  	//把是否是首次登陆转换为true或者false
			  	var isFirstLogin=<?php if ($_smarty_tpl->tpl_vars['isFirstLogin']->value==1){?>true<?php }else{ ?>false<?php }?>;
			  </script>
			</div>
			<!--引导结束-->
		<?php }?>
		
		<div id="header_ms">
		  <div class="header_top">
		    <div class="header_nva">
		      <div class="topleft"> 您好，<?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
！ <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/Members/UserLogout.aspx?eid=<?php echo $_smarty_tpl->tpl_vars['enterpriseId']->value;?>
">[退出]</a> </div>
		      <div class="topright">
			      <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/AccountCenter/MyOrder" class="text_bold orange">我的账户</a>|
			      <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/AccountCenter/AreadyBuyGoods" class="text_bold orange">我的订单</a>
			      <a href="#" style="display:none">多卡合并</a>
			      <a href="#" class="padding_r0" style="display:none">超市发充值</a>
			      <a href="#" class="padding_r0" style="display:none">意见反馈</a>
		      </div>
		    </div>
		  </div>
		  <div class="header_logo">
		    <div class="logo3"><div class="logo_left">&nbsp;</div>
		    <div class="city"><div class="city_dq"><span>@</span><span id="areaName" class="orange"><?php echo $_smarty_tpl->tpl_vars['areaName']->value;?>
</span></div>
		    <div class="ctqh "><a style="cursor: pointer;">[切换城市]</a></div>
		    <div id="sitecont" class="sitecont" style="display:none">
		        </div>
		      </div>
		    
		    </div>
		    <div id="search3">
		      <div class="search_bg ld">
		        
		        <input id="search_text" class="" type="text" value="请输入您要搜索的卡或是商品信息" onblur="if(this.value ==''){this.value='请输入您要搜索的卡或是商品信息';this.className='';}"
					                    onmouseover="this.focus()" onclick="this.className='dark';if(this.value=='请输入您要搜索的卡或是商品信息') {this.value='';}"  onkeydown="enterln(event);"/>
					        
				
				<input id="search_bottom" type="button" />
		        <div class="l margin_l10"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/CustomService/GetNoviceStartRight" class="bottom1">新手上路</a></div>
		      </div>
		      <!-- 
		      <div id="hot">
		        <ul>
		          <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Detail?productId=8&key=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
		                        target="_blank"><font color="#">沃尔玛</font></a></li>
		          <li><a  target="xinfuka_frame" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Agcod" target="_blank"><font color="#ff0000">亚马逊卓越</font></a></li>
		          <li><a  target="xinfuka_frame" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Ecode?productId=<?php echo $_smarty_tpl->tpl_vars['giftCardsId']->value['ddGiftCardsId'];?>
&key=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
		                        target="_blank"><font color="#">当当</font></a></li>
		          <?php if (isset($_smarty_tpl->tpl_vars['wejEnterpriseId']->value)){?>
		          <li>
		            <a target="xinfuka_frame" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Ecode?productId=<?php echo $_smarty_tpl->tpl_vars['giftCardsId']->value['jdGiftCardsId'];?>
&key=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" target="_blank">
		              <font color="#">京东</font>
		            </a>
		          </li>
		          <li>
		            <a target="xinfuka_frame" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Detail/Supermarket?productId=17584&key=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" target="_blank">
		              <font color="#">超市发</font>
		            </a>
		          </li>
		          <?php }?>
		        </ul>
		      </div>
		       -->
		    </div>
		    
		    <?php if (isset($_smarty_tpl->tpl_vars['logogrey']->value)){?>  <!-- 如果为中国移动显示图标 -->
			<div id="ctl00_panLogo" class="panlogo">
				<img width="157" height="69" border="0" style="display: block; float: right;" src="<?php echo $_smarty_tpl->tpl_vars['pic_server']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['enterpriseInfo']->value->LogoUrl;?>
">
			</div>
			<?php }?>
		    <!-- <div id="ctl00_panLogo" class="panlogo"> <img src="<?php echo $_smarty_tpl->tpl_vars['pic_server']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['enterpriseInfo']->value->LogoUrl;?>
" width="157" height="69" border="0" style="display: block; float: right;"></img> </div> -->
		  </div>
		</div>
		<div id="navigation">
		  <div id="nva_bar">
		    <div id="coorper3nva" class="coorper3nva">
		      <ul>
		        <li><a id="tag1" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Main/Index" class="movedcurr">首页</a></li>
		        <li><a id="tag2" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Main/Product">产品服务</a></li>
		        <li><a id="tag3" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/AccountCenter/MyOrder">账户中心</a></li>
		        <li><a id="tag4" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/CustomService">客户服务</a></li>
		        <?php if (isset($_smarty_tpl->tpl_vars['agcodValid']->value)&&$_smarty_tpl->tpl_vars['agcodValid']->value){?>
		        	<li><a id="tag5" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Agcod">AGCOD</a></li>
		        <?php }?>
		        <li><a id="tag6" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Terminal">手机客户端</a></li>
		      </ul>
		    </div>
		    <div id="shopCart">
		      <div id="myCart"><a  target="xinfuka_frame" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/BuyCards/ShoppingCart.aspx">兑换量：<span id="ctl00_cartCount"><?php echo $_smarty_tpl->tpl_vars['paycarCount']->value;?>
</span>件</a></div>
		      <div id="purchase"><a  target="xinfuka_frame" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/BuyCards/ShoppingCart.aspx">去结算</a> </div>
		    </div>
		  </div>
		  <div class="nvabottom_bg"></div>
		</div><?php }} ?>