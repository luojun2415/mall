{extends file="default/page/layout.tpl"}
{block name="content"}
<div  id="serviceContent">
<div class="w">
  
  <div class="shophome_nva l border_rsolid box bgwhite" style="height:auto;">
  <h3>服务类别</h3>
  {if isset($liaoyangEnterpriseId)}
  {include file='productService/ShowLiaoyangEnterprise.tpl'}
  {else}
  <ul>
       <li style="padding:0px 15px;">
          <div class="navigation_pic navigation_pic_ico3">
            <h3><a  href="javascript:void(0)">员工认可</a></h3>
          </div>
          <div class="navigation_cntext">
          	<a id="irenke" href="javascript:void(0)">生日认可</a>
          	  {if isset($allowEmoployRenke)}
	          	<a id="jrenke" href="javascript:void(0)">奖励认可</a><br>
	          {/if}
	        <a href="{$baseUrl}/TrainRenke">培训认可</a>
            </div>
          
        </li>
        
        
        <li class="bg_lightblue" style="padding:0px 15px;">
          <div class="navigation_pic navigation_pic_ico1">
            <h3>弹性福利</h3>
            <span class="text_12 orange text_bold">(礼卡积分)</span></div>
            	<div class="navigation_cntext">
            	{section name=i loop=$menu->Info}
            	   <a href="{$baseUrl}/ProductService/NewBusiness/{$menu->Info[i]->NameBase64}/{$menu->Info[i]->MenuId}/{$menu->Info[i]->Childs[0]->UrlEnMenuName}/{$menu->Info[i]->Childs[0]->Value}/{$menu->Info[i]->Childs[0]->Type}" >{$menu->Info[i]->Name}</a>  
		        {/section}
		        </div>
        </li>
        
        {if isset($allowElongHotel) || isset($allowElongPlane) || isset($liaoyangEnterpriseId)}
        <li class=" " style="padding:0px 15px;">
            <div class="navigation_pic navigation_pic_ico5">
              <a href="{$host}/liaoyang/Hotel"><h3>疗养</h3></a>{if isset($open529)}<span class="text_12 orange text_bold">（疗养积分）</span>{/if}
            </div>
            
             <div class="navigation_cntext">
             {if isset($allowElongHotel)}
             <a href="{$host}/liaoyang/Hotel">酒店预订 </a> 
            {/if}
            {if isset($allowElongPlane)}
	          <a href="{$host}/liaoyang/Plane">机票预订</a> <br>
	         {/if}
	         {if isset($allowBookDinner)}
	          <a href="{$host}/daojia/Dinner">薪福订餐</a> <br>
	        {/if}
          </div>
        </li>
		{/if}
      </ul>
      {/if}
     
      <!--广告开始-->
      <div class="xilian_div">
      	<ul class="xilian_ul">
      	 	<!--充值开始-->
      		<li class="xilian_li">
			    {if !in_array($enterpriseId,$noRecharge)}{*不使用话费充值的企业*}
			    <a href="{$baseUrl}/Search/Index/空中/1">
				<img src="ad/ad6.jpg" width="213px"/></a>
			
			    {/if}
			 </li>
			 <!--充值结束-->
			 
			 <!-- 薪福亚马逊乐享卡 开始 -->
			 <li class="xilian_li">
			    <a href="{$baseUrl}/Search/Index/美通卡/1">
				<img width="213px;"   src="ad/mtk.png"/></a>
			 </li>
			  <!-- 薪福亚马逊乐享卡 结束 -->
			  
			 <!--薪福客户端  开始-->
			 <li class="xilian_li">
			    <a href="{$baseUrl}/Search/Index/食材/1">
				<img width="213px;"   src="ad/dthsc.png"/></a>
			 </li>
			  <!-- 薪福客户端 结束-->
			 
			 <!--二维码充值 --> 
			 <li class="xilian_li">
				<img width="213px;"   src="ad/ad3.jpg"/>
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
	     		<img style="width: 258px;" src="ad/ad1312.gif"/>
	     	</a>
	    </div>
   </div>
   
    <!--  热销卡-->
    <div class="products_r_hot">
 		<div class="discount_nva ">
	 		<div class="homenews_nv l">热销卡</div> 
	 		<div class="homenews_borderbt l"></div>
	        <div class="homenews_moer l">
	          <a class="" href="{$baseUrl}/ProductService/NewBusiness/{$menu->hotProducts['Products_FathName']}/{$menu->hotProducts['Products_FathId']}/{$menu->hotProducts['Products_SonName']}/{$menu->hotProducts['Products_SonId']}">
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
	          <a class="" href="{$baseUrl}/ProductService/NewBusiness/{$menu->commonProducts['Products_FathName']}/{$menu->commonProducts['Products_FathId']}/{$menu->commonProducts['Products_SonName']}/{$menu->commonProducts['Products_SonId']}">
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
	          <a class="" href="{$baseUrl}/ProductService/NewBusiness/{$menu->destineProducts['Products_FathName']}/{$menu->destineProducts['Products_FathId']}/{$menu->destineProducts['Products_SonName']}/{$menu->destineProducts['Products_SonId']}">
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
	var renkeShow = '{$renkeShow}';

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
{script}
	var http = require('common:widget/http/http.js');
	//热销卡
	http.get('Product/Flex/id/1',{},function(data){
		$('#hotProducts').html(data);
	});
	//常规卡
	http.get('Product/Flex/id/0',{},function(data){
		$('#commonProducts').html(data);
	});
	//预定卡
	http.get('Product/Flex/id/2',{},function(data){
		$('#destineProducts').html(data);
	});
{/script}
{/block}
