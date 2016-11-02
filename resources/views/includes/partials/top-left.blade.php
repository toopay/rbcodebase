<nav class="navbar-1">
	<ul class="nav nav-inline navbar-left">
		@if (Auth::check())
		<li class="nav-item">
			<a class="nav-link toggle-layout" href="#">
				<i class="material-icons menu">menu</i>
			</a>
		</li>
		@endif
		<li class="nav-item">
			<a class="nav-link toggle-fullscreen" href="#">
				<i class="material-icons">fullscreen</i>
			</a>
		</li>
	</ul>


	@include('includes.partials.nav_user')

	@if (config('locale.status') AND count(config('locale.languages')) > 1)
		@include('includes.partials.nav_lang')
	@endif

	<a class="navbar-right btn btn-flat toggle-right-sidebar" href="#">
		<i class="material-icons">arrow_forward</i>
	</a>
</nav>
