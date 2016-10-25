<nav class="navbar navbar-fixed-top navbar-1">

	@if (Auth::check())
	<div class="navbar-brand">
		<a href="{!! route('marketing.index') !!}">DIY</a>:<a href="{!! route('marketing.index') !!}">DIFM</a>
	</div>

	<ul class="nav navbar-nav pull-left toggle-layout">
		<li class="nav-item">
			<a class="nav-link" data-click="toggle-layout"> <i class="zmdi zmdi-menu"></i>
			</a>
		</li>
	</ul>
	@else
	<div class="navbar-brand">
		<a href="{!! route('marketing.index') !!}">DIY</a>:<a href="{!! route('marketing.index') !!}">DIFM</a>
	</div>
	@endif

	<ul class="nav navbar-nav hidden-sm-down pull-left toggle-fullscreen-mode">
		<li class="nav-item">
			<a class="nav-link" data-click="toggle-fullscreen-mode"><i class="zmdi zmdi-fullscreen"></i></a>
		</li>
	</ul>

	@include('includes.partials.nav_search')

	@include('includes.partials.nav_brand')

	@include('includes.partials.nav_user')

</nav>
