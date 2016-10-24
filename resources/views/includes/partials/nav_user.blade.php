@if(Auth::guest())
	<ul class="nav navbar-nav pull-right hidden-md-down navbar-profile">
		<li class="nav-item"> <a href="{!! route('actor.user.auth.login') !!}" class="nav-link">{{ trans('navs.app.login') }}</a></li>
		<li class="nav-item"> <a href="{!! route('actor.user.auth.register') !!}" class="nav-link">{{ trans('navs.app.register') }}</a></li>
	</ul>
@else

	<ul class="nav navbar-nav pull-right navbar-profile">
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle no-after" data-toggle="dropdown">
				<img class="img-circle img-fluid profile-image" src="{!! access()->user()->picture ? url(access()->user()->picture) : get_gravatar(access()->user()->email) !!}" alt="{{ access()->user()->full_name }}" />
			</a>
			<div class="dropdown-menu dropdown-menu-scale from-right dropdown-menu-right">
				<a href="{!! route('app.dashboard') !!}" class="dropdown-item animated fadeIn"><i class="fa fa-btn fa-dashboard fa-fw"></i> <span class="icon-text">Dashbaord</span></a>
				<a href="{!! route('actor.user.profile') !!}" class="dropdown-item animated fadeIn"><i class="fa fa-btn fa-cogs fa-fw"></i> <span class="icon-text">Your Settings</span></a>
				<a href="{!! route('actor.brand.billing') !!}" class="dropdown-item animated fadeIn"><i class="fa fa-btn fa-list fa-fw"></i> <span class="icon-text">Brands</span></a>
				@permission('view-admin')
				<a href="{!! route('admin.dashboard') !!}" class="dropdown-item animated fadeIn"><i class="fa fa-btn fa-lock fa-fw"></i> <span class="icon-text">{!! trans('navs.app.user.administration') !!}</span></a>
				@endauth
				<a href="{!! route('actor.user.auth.logout') !!}" class="dropdown-item animated fadeIn"><i class="fa fa-btn fa-sign-out fa-fw"></i> <span class="dropdown-text">{{ trans('navs.general.logout') }}</span></a>
			</div>
		</li>
	</ul>

	<ul class="nav navbar-nav pull-right hidden-sm-down navbar-notifications">
		<li class="nav-item">
			<a class="nav-link" data-click="toggle-right-sidebar">
				<i class="zmdi zmdi-notifications-active"></i>
				@if(1 == 2)
				<!-- @TODO: Dynamic -->
				<span class="label label-rounded label-danger label-xs">3</span>
				@endif
			</a>
		</li>
	</ul>

@endif

@if (config('locale.status') AND count(config('locale.languages')) > 1)
	@include('includes.partials.nav_lang')
@endif
