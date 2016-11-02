@if(Auth::guest())
	<ul class="nav navbar-nav pull-right hidden-md-down navbar-profile">
		<li class="nav-item"> <a href="{!! route('actor.user.auth.login') !!}" class="nav-link">{{ trans('navs.app.login') }}</a></li>
		<li class="nav-item"> <a href="{!! route('actor.user.auth.register') !!}" class="nav-link">{{ trans('navs.app.register') }}</a></li>
	</ul>
@else
	<span class="welcome">Hello!, Eric Simpson</span>
	<div class="dropdown user-dropdown">
		<a class="dropdown-toggle no-after" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<div class="badge badge-40">
				<span class="tag tag-sm tag-rounded tag-primary">1</span>
				{{-- <img class="max-w-40 img-circle" src="{!! access()->user()->picture ? url(access()->user()->picture) : get_gravatar(access()->user()->email) !!}" alt="{{ access()->user()->full_name }}" /> --}}
			</div>
		</a>
		<div class="dropdown-menu dropdown-menu-right from-right">
			<a class="dropdown-item" href="{!! route('common.dashboard') !!}">
				<i class="material-icons icon">dashboard</i>
				<span class="title">Dashboard</span>
				<span class="tag tag-pill tag-raised tag-danger tag-xs">New</span>
			</a>
			<a class="dropdown-item" href="{!! route('actor.user.profile') !!}">
				<i class="material-icons icon">settings</i>
				<span class="title">Your Settings</span>
				<span class="tag tag-outline-primary tag-rounded tag-xs">5</span>
			</a>
			<a class="dropdown-item" href="#">
				<i class="material-icons icon">settings</i>
				<span class="title">Profile</span>
			</a>
			<a class="dropdown-item" href="{!! route('actor.user.auth.logout') !!}">
				<i class="material-icons icon">power_settings_new</i>
				<span class="title">Logout</span>
			</a>

			{{-- <a href="{!! route('actor.brands') !!}" class="dropdown-item animated fadeIn"><i class="fa fa-btn fa-list fa-fw"></i> <span class="icon-text">Brands</span></a> --}}
			@ permission('view-admin')
			<a href="{!! route('admin.dashboard') !!}" class="dropdown-item animated fadeIn"><i class="fa fa-btn fa-lock fa-fw"></i> <span class="icon-text">{!! trans('navs.app.user.administration') !!}</span></a>
			@ endauth



		</div>
	</div>
@endif
