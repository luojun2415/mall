<ul>
	{if isset($data) && count($data) > 0}
		{foreach $data as $product}
		<li>
			<div class="list_cn por_relative">
				<u><a href='{$product->ProductUrl}' target="_blank">{$product->ProductName}</a></u>
				<div class="list_pic">
					<a href='{$product->ProductUrl}' target="_blank">
						<img src='{$product->ThumbnailUrl}'/>
					</a>
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
		{/foreach}
	{/if}
</ul>
<div id='tName' style='display:none'>{$tagName}</div>	