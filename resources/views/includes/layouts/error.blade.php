<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	{{--{!! SEO::generate() !!}--}}
	@yield('meta')

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="{{ elixir('/css/common.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ elixir('/css/actor-user-error.css') }}" />
	<meta name="_token" content="{{ csrf_token() }}" />
	@yield('before-styles-end')
	<!--[if IE]>
	<script src="{{ elixir('js/ie.js') }}"></script>
	<![endif]-->
	@yield('after-styles-end')
	@include('includes.partials.ga')
</head>
<body id="pages-error" data-layout="empty-view-1" data-palette="palette-0" data-direction="none">

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				@yield('content')
				<p class="copyright text-sm m-t-20">
					@include('includes.partials.footer_credit')
					<br />
					@include('includes.partials.footer_links')
				</p>
			</div>
		</div>
	</div>

	@yield('before-scripts-end')
	<script src="{{ elixir('js/common.js') }}"></script>
	@yield('after-scripts-end')
</body>
</html>
