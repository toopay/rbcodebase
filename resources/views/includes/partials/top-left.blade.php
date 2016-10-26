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


	@ include('includes.partials.nav_user')

	<span class="welcome">Hello!, Eric Simpson</span>
	<div class="dropdown user-dropdown">
		<a class="dropdown-toggle no-after" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<div class="badge badge-40">
				<span class="tag tag-sm tag-rounded tag-primary">1</span>
				<img src="../../../../assets/faces/m7.png" class="max-w-40 img-circle" alt="badge" />
			</div>
		</a>
		<div class="dropdown-menu dropdown-menu-right from-right">
			<a class="dropdown-item" href="#">
				<i class="material-icons icon">email</i>
				<span class="title">Inbox</span>
				<span class="tag tag-pill tag-raised tag-danger tag-xs">New</span>
			</a>
			<a class="dropdown-item" href="#">
				<i class="material-icons icon">grade</i>
				<span class="title">Messages</span>
				<span class="tag tag-outline-primary tag-rounded tag-xs">5</span>
			</a>
			<a class="dropdown-item" href="#">
				<i class="material-icons icon">settings</i>
				<span class="title">Profile</span>
			</a>
			<a class="dropdown-item" href="#">
				<i class="material-icons icon">alarm</i>
				<span class="title">Lock screen</span>
			</a>
			<a class="dropdown-item" href="#">
				<i class="material-icons icon">power_settings_new</i>
				<span class="title">Logout</span>
			</a>
		</div>
	</div>
	<a class="navbar-right btn btn-flat toggle-right-sidebar" href="#">
		<i class="material-icons">arrow_forward</i>
	</a>
</nav>
