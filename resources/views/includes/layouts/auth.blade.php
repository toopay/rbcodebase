<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	{{--{!! SEO::generate() !!}--}}
	@yield('meta')

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="{{ elixir('/css/login-register.css') }}" />
	@yield('before-styles-end')
	<!--[if IE]>
	<script src="{{ elixir('js/ie.js') }}"></script>
	<![endif]-->
	@yield('after-styles-end')
	@include('includes.partials.ga')
</head>
<body data-layout="empty-view-1" data-palette="palette-0" data-direction="none">


<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 main">
			@yield('content')
		</div>
	</div>
</div>

	@yield('before-scripts-end')
	<!-- global scripts -->
	@yield('after-scripts-end')
</body>
</html>
