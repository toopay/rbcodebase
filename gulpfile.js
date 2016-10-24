const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
	//.phpUnit()
	//.compressHtml()

	mix.sass('app.scss')
	   .webpack('app.js')

	//IE scripts
		.scripts([
			'html5shiv.min.js',
			'respond.min.js'
		],'public/js/ie.js')

	//Login\Registration styles
		.styles([
			'layouts/empty-view-1.css',
			'main.css',
			'global.css',
			'pages/sign-in.css',
		],'public/css/login-register.css');


	mix.version([
		'public/js/ie.js',
		'public/css/login-register.css'
	])
});
