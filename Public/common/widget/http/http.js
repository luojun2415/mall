/**
 * 调用之前，需要使用widget初始化
 */
var _baseUrl;
var $ = require('jquery');
exports.init = function(baseUrl) {
	_baseUrl = baseUrl;
}

exports.get = function(url, data, fn, type) {
	return $.get(getUrl(url), data, fn, type);
}

exports.post = function(url, data, fn, type) {
	return $.post(getUrl(url), data, fn, type);
}

exports.ajax = function(options) {
	options = options || {};
	
	options.url = getUrl(options.url);
	
	return $.ajax(options);
}

getUrl = function(url) {
	return _baseUrl + '/' + url;
}