    <div id="slide" class="m" >
    	<!-- AdvLeft begin -->
	<div class="slide-wrap" >
		<ul class="slide-items">
			{if isset($advs) && count($advs) > 0}
			{foreach from=$advs item=adv}
			<li class="style1" data-tag="2_232_1589" style="">
					<a clstag="homepage|keycount|home2012|0911" title="" target="_blank" href='{$adv->LinkUrl}'>
					<img src="{$host}/EnterPriseAdmin/{$adv->PicPath}" border="0" gid="1" width="732"  height="227" >
					</a>
			</li>
			{/foreach}
			{/if}
		</ul>
	</div>	
			
	<div class="slide-controls">
		{if isset($advs) && count($advs) > 0}
		{section name="i" start=1 loop=count($advs)+1}
			{if ($smarty.section.i.index == 1)}
			<span class="curr">{$smarty.section.i.index}</span>
			{else}
			<span class="">{$smarty.section.i.index}</span>
			{/if}
		{/section}
		{/if}
	</div>
	{script}
			//用document.ready包装后就没有轮播效果了
			var t = n = 0, count;
		    count = $(".slide-items li").length;
		    t = setInterval("showAuto()", 2000);
		    $(".slide-items li:not(:first-child)").hide();
		    $(".slide-controls span").click(function() {
		        var i = $(this).text() - 1; //获取span元素内的值，即1，2，3，4
		        n = i;
		        if (i >= count) return;
		        $(".slide-items li").filter(":visible").fadeOut(500).parent().children().eq(i).fadeIn(1000);
		        $(this).toggleClass("curr");
		        $(this).siblings().removeAttr("class");
		    });
		    function showAuto() {
		        n = n >= (count - 1) ? 0 : ++n;
		        $(".slide-controls span").eq(n).trigger('click');
		    };
	
			$(".slide-items li").hover(
					function() { clearInterval(t); }, 
					function() { t = setInterval("showAuto()", 4000); });
	{/script}
    </div> 