<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'Whoops')</title>
	<meta name="description" content="Marino, Admin theme, Dashboard theme, AngularJS Theme">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="/favicon.ico">
	<!--[if IE]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- global stylesheets -->
	<link rel="stylesheet" href="/assets/css/bootstrap.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/1.0.0/css/flag-icon.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/assets/css/main.css">
</head>
<body data-layout="empty-layout" data-palette="palette-0" data-direction="none">
	<div class="fullsize-background-image-1">
		<img src="/assets/backgrounds/background.jpg" />
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<div class="error-page text-center animated fadeIn delay-2000">
					@yield('content')
					<p class="copyright text-sm">
						@include('includes.partials.footer_credit')
						<br />
						@include('includes.partials.footer_links')
					</p>
				</div>
			</div>
		</div>
	</div>


	<!-- global scripts -->
	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/tether.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
	<script src="/assets/js/pace.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.0.0/lodash.min.js"></script>
	<script src="/assets/js/jquery.fullscreen-min.js"></script>
	<script src="/assets/js/jquery.storageapi.min.js"></script>
	<script src="/assets/js/wow.min.js"></script>
	<script src="/assets/js/functions.js"></script>
	<script src="/assets/js/colors.js"></script>
	<script src="/assets/js/left-sidebar.js"></script>
	<script src="/assets/js/navbar.js"></script>
	<script src="/assets/js/main.js"></script>
	<script src="/assets/js/components/floating-labels.js"></script>
	<script src="/assets/js/pages-error-page.js"></script>
</body>
</html>
