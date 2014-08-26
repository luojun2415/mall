var baseUrl;
exports.init = function(baseUrl) {
	this.baseUrl = baseUrl;
}
exports.get = function(ctl, action, data, fn, type) {
	return $.get(getUrl(ctl, action), data, fn, type);
}

exports.post = function(ctl, action, data, fn, type) {
	return $.post(getUrl(ctl, action), data, fn, type);
}

getUrl = function(ctl, action) {
	return this.baseUrl + '/' + ctl + '/' + action;
}