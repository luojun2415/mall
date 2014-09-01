define('common:widget/http/http.js', function(require, exports, module){

/**
 * 调用之前，需要使用widget初始化
 */
var _baseUrl;
exports.init = function(baseUrl) {
	_baseUrl = baseUrl;
}

exports.get = function(url, data, fn, type) {
	return $.get(getUrl(url), data, fn, type);
}

exports.post = function(url, data, fn, type) {
	return $.post(getUrl(url), data, fn, type);
}

getUrl = function(url) {
	return _baseUrl + '/' + url;
}

});