@if(Auth::guest())
@else
<div class="nav-brand btn-group hidden-sm-down m-b-30">
	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button">
		{{ access()->profile()->display_name }} <span class="caret"></span>
	</button>
	<ul class="dropdown-menu">
		@foreach(access()->profiles() as $profile)
		@if($profile->display_name !== access()->profile()->display_name)
		<li><a class="dropdown-item" href="{{ route('actor.brand.switch', [$profile->type, $profile->id]) }}">{{ $profile->display_name }}</a></li>
		@endif
		@endforeach
		<li><a class="dropdown-item" href="{{ route('actor.brand.new') }}"><i class="fa fa-plus"></i> New Project</a></li>
	</ul>
</div>
@endif
