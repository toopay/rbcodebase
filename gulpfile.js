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

	/*
	 * Common
	 */

		// IE scripts
		.scripts([
			'html5shiv.min.js',
			'respond.min.js'
		],'public/js/ie.js')

		// Common
		.styles([
			'main.css',
			'global.css',
			'animate.css',
			'bootstrap/scss/bootstrap.css',
			'font-awesome/font-awesome.css',
			'pages/index.css',
			'ui/social-media-buttons.css'
		],'public/css/common.css')

	/*
	 * Page Specific
	 */

		// Auth
		.styles([
			'layouts/empty-view-2.css',
			'pages/sign-in.css',
			'pages/sign-up.css',
			'ui/buttons.css',
			'roboto.css'
		],'public/css/actor-user-auth.css')

		// Error
		.styles([
			'layouts/empty-view-1.css',
			'pages/error.css',
		],'public/css/actor-user-error.css')

		; // Close

	/*
	 * Tools
	 */

		// Copy
		mix.copy('resources/assets/fonts/font-awesome','public/assets/fonts/font-awesome');

		// Version
		mix.version([
			'public/js/ie.js',
			'public/js/common.js',
			'public/css/common.css',
			'public/css/actor-user-auth.css',
			'public/css/actor-user-error.css'
		])
});
