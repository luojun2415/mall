{extends file="default/page/layout.tpl"}
{block name="content"}
<div class="w" id="changePage">
{if isset($style) AND $style == 'cuican'}
<div>
<img width="1000" height="98" border="0" gid="1" src="{$pic_server}/image/{$pic_subpath}/ad_QQ.jpg">
</div>
{/if}
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
          <div class="homenews_moer l" style="margin-top: 0px;"><a href="{$baseUrl}/NewsCenter/Index/MS/2/1" id="msMore">MORE</a></div>
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
        {if $enterpriseInfo->EnterpriseName|truncate:2:"" eq '民生'}
        	<div class="homenews_nv l">幸福人生 </div>
        {else}
        	<div class="homenews_nv l">薪福卡 </div>
        {/if}
          
          <div class="homenews_borderbt l w195" style="width: 240px !important;"></div>
          <div class="homenews_moer l" style="margin-top: 0px;">
          	<a href="{$baseUrl}/NewsCenter/Index/XF/2/1" id="xfMore">MORE</a>
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
    <div><img src="ad2.jpg" border="0" gid="1" width="258"  height="57" ></img></div>
    <div class="clar"></div>     
   <div class="bgwhite box"><br><img src="ad3.jpg"   gid="1"><br><br></div>
  </div>
  <div class="clar"></div>
 <div class="homeleft">
 <div class="discount box bgwhite"  style="width:100%;"> 
    <div class="discount_nva ">
    	薪福推荐
    </div> 
    
    <div class="discount list">
      <ul>
      	{if isset($normalProducts) && count($normalProducts)>0}
      	{foreach from=$normalProducts item=product name=num}
      	  {if $smarty.foreach.num.index lt 3}
      	 <li style="width: 33%">
          <div class="list_cn por_relative">
          	<u><a href="{$product->ProductUrl}" target="_blank">
          	{$product->ProductName}</a></u>
            <div class="list_pic">
            	<a href="{$product->ProductUrl}" target="_blank">
            	<img src="{$product->ThumbnailUrl}"/></a>
            </div>
            
            <div class="list_text">
              	{if isset($product->MinAttributeValue,$product->MaxAttributeValue)} 
					<p>面值：
						{if $product->MinAttributeValue == $product->MaxAttributeValue}
							{$product->MaxAttributeValue|string_format:'%0.2f'}
						{else}
							{$product->MinAttributeValue|string_format:'%0.2f'} - {$product->MaxAttributeValue|string_format:'%0.2f'}	
						{/if}
					</p>
              		<p class="orange text_v">积分：￥
              		{if $product->MinXFPrice == $product->MaxXFPrice}
							{$product->MaxXFPrice|string_format:'%0.2f'}
						{else}
							{$product->MinXFPrice|string_format:'%0.2f'} - {$product->MaxXFPrice|string_format:'%0.2f'}	
						{/if}
              		</p>
              {/if}
            </div>
            
          </div>
        </li>
        {/if}
        {/foreach}
        {/if}
        
      </ul>
    </div>
  </div>
  </div><div class="homeright">
  	<img alt="" class="box" src="adxfwx.jpg">
  </div>
  
  <div class="clar"></div>
</div>
<div class="clar"></div>
<!-- 
           新闻与动态互切换
 -->
 {if $isFirstImgShow != 'already' && isset($foodgray)}
 <div id="advPopupWindow" class="ad3650830" style="position:fixed">
	<a href="javascript:void(0)"  id="closeButton"><img src="{$cssUrlPath}/image/close.png" /></a>
</div>
{/if}
<library>

<script>
          	
var lastHeight = 0;
var iframeWin = false;
var host = '{$host}';
var renkeHTML ="<img src='{$pic_server}/image/{$pic_subpath}/renke.jpg'>";
var renkeShow = '{$renkeShow}';
var isFirstImgShow = '{$isFirstImgShow}';
var foodgray = '{$foodgray}';
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
{literal}

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
{/literal}
</library>
{/block}