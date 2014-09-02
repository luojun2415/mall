			{script}
				require('default:widget/header/header.js');				
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
						var SPECIAL_STR = "￥#$~!@%^&*;'\"?><[]{}\\|,:/=+-“”‘：";
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
		        	//var url = '{$host}'+"/Enterprise/UserCardSearch.aspx?keyWord=" + escape(keyWord) + "&key="+'{$key}';
					var url = baseUrl+"/Search/Index/" + keyWord + '/1';
		            window.location.href = url;
		        };
		        
			{/script}
		</head>
		<body>
		{if isset($isFirstLogin) and  ($isFirstLogin eq true)}
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
			  	var isFirstLogin={if $isFirstLogin==1}true{else}false{/if};
			  </script>
			</div>
			<!--引导结束-->
		{/if}
		
		<div id="header_ms">
		  <div class="header_top">
		    <div class="header_nva">
		      <div class="topleft"> 您好，{$user->name}！ <a href="{$host}/Members/UserLogout.aspx?eid={$enterpriseId}">[退出]</a> </div>
		      <div class="topright">
			      <a href="{$baseUrl}/AccountCenter/MyOrder" class="text_bold orange">我的账户</a>|
			      <a href="{$baseUrl}/AccountCenter/AreadyBuyGoods" class="text_bold orange">我的订单</a>
			      <a href="#" style="display:none">多卡合并</a>
			      <a href="#" class="padding_r0" style="display:none">超市发充值</a>
			      <a href="#" class="padding_r0" style="display:none">意见反馈</a>
		      </div>
		    </div>
		  </div>
		  <div class="header_logo">
		    <div class="logo3"><div class="logo_left">&nbsp;</div>
		    <div class="city"><div class="city_dq"><span>@</span><span id="areaName" class="orange">{$areaName}</span></div>
		    <div class="ctqh "><a style="cursor: pointer;">[切换城市]</a></div>
		    <div id="sitecont" class="sitecont" style="display:none">
		        </div>
		      </div>
		    
		    </div>
		    <div id="search3">
		      <div class="search_bg ld">
		        {literal}
		        <input id="search_text" class="" type="text" value="请输入您要搜索的卡或是商品信息" onblur="if(this.value ==''){this.value='请输入您要搜索的卡或是商品信息';this.className='';}"
					                    onmouseover="this.focus()" onclick="this.className='dark';if(this.value=='请输入您要搜索的卡或是商品信息') {this.value='';}"  onkeydown="enterln(event);"/>
					        
				{/literal}
				<input id="search_bottom" type="button" />
		        <div class="l margin_l10"><a target="_blank" href="{$baseUrl}/CustomService/GetNoviceStartRight" class="bottom1">新手上路</a></div>
		      </div>
		      <!-- 
		      <div id="hot">
		        <ul>
		          <li><a href="{$baseUrl}/Detail?productId=8&key={$key}"
		                        target="_blank"><font color="#">沃尔玛</font></a></li>
		          <li><a  target="xinfuka_frame" href="{$baseUrl}/Agcod" target="_blank"><font color="#ff0000">亚马逊卓越</font></a></li>
		          <li><a  target="xinfuka_frame" href="{$baseUrl}/Ecode?productId={$giftCardsId.ddGiftCardsId}&key={$key}"
		                        target="_blank"><font color="#">当当</font></a></li>
		          {if isset($wejEnterpriseId)}{*529专区新增开始*}
		          <li>
		            <a target="xinfuka_frame" href="{$baseUrl}/Ecode?productId={$giftCardsId.jdGiftCardsId}&key={$key}" target="_blank">
		              <font color="#">京东</font>
		            </a>
		          </li>
		          <li>
		            <a target="xinfuka_frame" href="{$baseUrl}/Detail/Supermarket?productId=17584&key={$key}" target="_blank">
		              <font color="#">超市发</font>
		            </a>
		          </li>
		          {/if}{*529专区新增结束*}
		        </ul>
		      </div>
		       -->
		    </div>
		    
		    {if isset($logogrey)}  <!-- 如果为中国移动显示图标 -->
			<div id="ctl00_panLogo" class="panlogo">
				<img width="157" height="69" border="0" style="display: block; float: right;" src="{$pic_server}/{$enterpriseInfo->LogoUrl}">
			</div>
			{/if}
		    <!-- <div id="ctl00_panLogo" class="panlogo"> <img src="{$pic_server}/{$enterpriseInfo->LogoUrl}" width="157" height="69" border="0" style="display: block; float: right;"></img> </div> -->
		  </div>
		</div>
		<div id="navigation">
		  <div id="nva_bar">
		    <div id="coorper3nva" class="coorper3nva">
		      <ul>
		        <li><a id="tag1" href="{$baseUrl}/Main/Index" class="movedcurr">首页</a></li>
		        <li><a id="tag2" href="{$baseUrl}/Main/Product">产品服务</a></li>
		        <li><a id="tag3" href="{$baseUrl}/AccountCenter/MyOrder">账户中心</a></li>
		        <li><a id="tag4" href="{$baseUrl}/CustomService">客户服务</a></li>
		        {if isset($agcodValid) && $agcodValid}
		        	<li><a id="tag5" href="{$baseUrl}/Agcod">AGCOD</a></li>
		        {/if}
		        <li><a id="tag6" href="{$baseUrl}/Terminal">手机客户端</a></li>
		      </ul>
		    </div>
		    <div id="shopCart">
		      <div id="myCart"><a  target="xinfuka_frame" href="{$host}/BuyCards/ShoppingCart.aspx">兑换量：<span id="ctl00_cartCount">{$paycarCount}</span>件</a></div>
		      <div id="purchase"><a  target="xinfuka_frame" href="{$host}/BuyCards/ShoppingCart.aspx">去结算</a> </div>
		    </div>
		  </div>
		  <div class="nvabottom_bg"></div>
		</div>