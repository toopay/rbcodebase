<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Peak UI</title>
	<meta name="description" content="dashboard, admin, template, templates, peak, peak ui, material design">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/assets/icons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" type="text/css" href="{{ elixir('css/admin.css') }}">
	<!-- endbuild -->
</head>
<body class="animated fadeIn" id="dashboards-analytics" data-layout="default-sidebar-1" data-sidebar="danger" data-navbar="danger" data-controller="dashboards" data-view="analytics">
@include('includes.partials.admin.top-left')
@include('includes.partials.admin.top-right')
<div class="container-fluid">
	<div class="row">
		@include('includes.partials.admin.left-sidebar')

		@include('includes.partials.admin.right-sidebar')
		<div class="col-xs-12 main">
			@yield('content')
		</div>
	</div>
</div>
<!-- build:js js/vendor.js -->
<script src="{{ elixir('js/admin.js') }}"></script>
<div class="right-sidebar-backdrop"></div>
</body>
</html>
