<div class="mt pop_city"><strong>选择您所在的换卡城市：</strong><span>您在  [ <b id="defCity">{$areaName}</b> ]</span><i id="closeButton" onclick="closeChangeSub()"></i> 
          </div>
          <div class="city_list">
<ul>
<li>
<h4>热门</h4>
			<div class="hotcity">
			{section name="i" loop=$cities}
				<a  href="javascript:void(0)"  data-id="{$cities[i]->Id}">{$cities[i]->Name}</a>			
			{/section}
			</div>
</li>

</ul>
</div>