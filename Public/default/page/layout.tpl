<!DOCTYPE html>
{html framework="common:static/mod.js"}
	{head}
		<meta
			content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"
			name="viewport">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<META HTTP-EQUIV="pragma" CONTENT="no-cache">
		<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache, must-revalidate">
		<META HTTP-EQUIV="expires" CONTENT="0">
		<meta content="{$description}" name="description">
		<title>{$title}</title>
		{require name="common:static/html5.js"}
		{require name="default:static/lib/css/index.css"}
		{require name="common:static/jquery-1.8.1.min.js"}
		{require name="default:static/lib/css/user/person.css"}
		{widget name="common:widget/http/http.tpl" data=$baseUrl}
		{require name="default:static/lib/js/common.js" sync=true}
		{block name="block_head_static"}{/block}
	{/head}
	{body}

		{widget name="default:widget/header/header.tpl"}
		{block name="content"}{/block}
		{widget name="default:widget/footer/footer.tpl"}
	{/body}
{/html}
