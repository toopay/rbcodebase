@if (config('locale.status')AND count(config('locale.languages')) > 1)
	<ul class="nav navbar-nav pull-right hidden-sm-down navbar-flags">
		<li class="nav-item dropdown dropdown-menu-right">
			<a class="nav-link dropdown-toggle no-after" data-toggle="dropdown">
				@if(access()->user())
					@if(access()->user()->language)
					<span class="flag flag-icon flag-icon-{{ access()->user()->language == 'en' ? 'us' : access()->user()->language }}"></span>
					@else
					<span class="flag flag-icon flag-icon-us"></span>
					@endif
				@elseif(session()->has('locale'))
					<span class="flag flag-icon flag-icon-{{ session('locale') == 'en' ? 'us' : session('locale') }}"></span>
				@else
					<span class="flag flag-icon flag-icon-us"></span>
				@endif
			</a>
			<div class="dropdown-menu dropdown-menu-scale from-right dropdown-menu-right">
				@foreach (array_keys(config('locale.languages')) as $lang)
					<a href="{!! url("lang/$lang") !!}" class="dropdown-item"> <span class="flag flag-icon flag-icon-{{ $lang == 'en' ? 'us' : $lang }}"></span>  <span class="title">{!! trans('menus.language-picker.langs.'.$lang) !!}</span></a>
				@endforeach
			</div>
		</li>
	</ul>
@endif
