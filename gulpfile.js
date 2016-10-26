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
			'plugins/bootstrap-material-design/dist/bootstrap-material-design.iife.js',
			'plugins/app.js'
		],'public/js/common.js')



		/*
		 * Admin layout assets
		 */

		.styles([
			'roboto.css',
			'material-icons.css',
			'font-awesome/font-awesome.css',
			'flag-icon-css.css',
			'main.css',
			'global.css',
			'colors.css',
			'box-shadows.css',
			'animate.css',
			'layouts/homepage.css',
			'layouts/default-sidebar-1.css',
			'left-sidebars/left-sidebar-1.css',
			'navbars/navbar-1.css',
			'right-sidebars/right-sidebar-1.css',
			'helpers/margin.css',
			'helpers/padding.css',
			'helpers/text.css',
			'helpers/border.css',
			'helpers/height.css',
			'helpers/width.css',
			'helpers/other.css',
			'color-system/material-design-colors.css',
			'icons/flags.css',
			'icons/font-awesome.css',
			'icons/weather-icons.css',
			'icons/material-design-icons.css',
			'extras/mousetrap.css',
			'jumbotron/jumbotron-1.css',
			'forms/basic.css',
			'forms/checkboxes.css',
			'forms/radios.css',
			'forms/sliders.css',
			'ui/badges.css',
			'ui/breadcrumbs.css',
			'ui/buttons.css',
			'ui/cards.css',
			'ui/dropdowns.css',
			'ui/tooltips.css',
			'ui/typography.css',
			'user-widgets/user-widget-1.css',
			'text-widgets/text-widget-1.css',
		],'public/css/master.css')

		.scripts([
			'plugins/jquery/dist/jquery.min.js',
			'plugins/lodash/dist/lodash.min.js',
			'plugins/modernizr.js',
			'plugins/tether/dist/js/tether.js',
			'plugins/jquery-storage-api/jquery.storageapi.min.js',
			'plugins/moment/moment.js',
			'plugins/mousetrap/mousetrap.js',
			'plugins/bootstrap-material-design/dist/bootstrap-material-design.iife.js',
			'plugins/highlight.min.js',
			'plugins/jquery-fullscreen/jquery.fullscreen-min.js',
			'plugins/functions.js',
			'plugins/app.js',
			'plugins/left-sidebar.js',
			'plugins/navbar-1.js',
			'plugins/icons/font-awesome.js',
		],'public/js/master.js')

	; // Close

		/*
		 * Tools
		 */

		// Copy
		mix.copy('resources/assets/fonts/font-awesome','public/assets/fonts/font-awesome');

		// Version
		mix.version([
			'public/js/ie.js',
			'public/css/common.css',
			'public/js/common.js',
			'public/css/master.css',
			'public/js/master.js',
			'public/css/actor-user-auth.css',
			'public/css/actor-user-error.css'
		])
});
