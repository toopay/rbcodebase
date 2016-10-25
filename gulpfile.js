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
			'colors.css',
			'box-shadows.css',
			'font-awesome/font-awesome.css',
			'animate.css',
			'layouts/homepage.css',
			'layouts/default-sidebar-1.css',
			'layouts/default-sidebar-2.css',
			'layouts/empty-view-1.css',
			'layouts/empty-view-2.css',
			'layouts/empty-view-3.css',
			'color-system/material-design-colors.css',
			'icons/font-awesome.css',
			'icons/material-design-icons.css',
			'pages/error.css',
			'pages/sign-in.css',
			'pages/sign-up.css',
			'ui/buttons.css',
			'ui/progress-bars.css',
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

		/*
		* Page specific js files
		*/

		.scripts([
			'plugins/tether/dist/js/tether.js',
			'plugins/bootstrap-material-design/bootstrap-material-design.iife.js',
			'plugins/app.js'
		],'public/js/common.js')

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
