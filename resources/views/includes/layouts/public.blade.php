<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	{!! SEO::generate() !!}
	@yield('meta')

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="/favicon.ico" />
	<meta name="_token" content="{{ csrf_token() }}" />
	@yield('before-styles-end')
	<!--[if IE]>
	<script src="{{ elixir('js/ie.js') }}"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="{{ elixir('css/common.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ elixir('css/master.css') }}">
	@yield('after-styles-end')
	@include('includes.partials.ga')
</head>
<body class="{!! Route::getCurrentRoute()->getPath() !!} animated fadeIn" id="dashboards-installation" data-layout="default-sidebar-2" data-sidebar="danger" data-navbar="danger" data-controller="dashboards" data-view="analytics">
	@include('includes.partials.top-left')
	@include('includes.partials.top-right')
	<div class="container-fluid">
		<div class="row">
			@if (Auth::check())
				@include('includes.partials.sidebar_left')
				@include('includes.partials.sidebar_right')
			@endif
			<div class="col-xs-12 main">
				<div class="page-on-top">
					<div class="row">
						<div class="col-xs-12">
							@include('includes.partials.messages')
							@yield('content')
						</div>
					</div>
				</div>
				<div class="footer m-b-10">
					<div class="row">
						<div class="col-xs-6 pull-left align-left">
							@include('includes.partials.footer_credit')
						</div>
						<div class="col-xs-6 pull-right align-right">
							@include('includes.partials.footer_links')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@yield('before-scripts-end')
	<!-- build:js js/vendor.js -->
	<script src="{{ elixir('js/master.js') }}"></script>
	@yield('after-scripts-end')
	<div class="right-sidebar-backdrop"></div>
</body>
</html>
