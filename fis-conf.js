fis.config.merge({
	namespace : '',
});

fis.config.set({
	roadmap : {
		path : [{
			reg : /^\/(Public|res)\/(.*)/i,
			release : false
		},{
			reg : /^\/tmp_out\/(.*)/i,
			release : '/res/$1'
		},{
			reg : /\.htaccess/i,
			release : '$&'
		},{
			reg : /\.bat$/i,
			release : false
		},{
			reg : /\/\w+\.json$/i,
			release: false
		},{
			reg : /\.md$/i,
			release : false
		}]
	},
	deploy : {
		local : {
			to : 'd:/release'
		},
		test : {
			receiver : 'http://172.18.105.223:2000/receiver.php',
			to : '/usr/local/www/web/test' //目录要可写
		}
	}
})