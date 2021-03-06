fis.config.merge({
    namespace : 'common',
    pack : {
        'static/pkg/aio.css' : [
            'static/lib/css/bootstrap.css',
            'static/lib/css/bootstrap-responsive.css',
            'widget/**.css'
        ],
        'static/pkg/aio.js' : [
            'static/lib/js/jquery-1.10.1.js',
            'widget/**.js'
        ]
    },
	roadmap : {
		domain : 'http://dev.mall.com/res'
	},
});