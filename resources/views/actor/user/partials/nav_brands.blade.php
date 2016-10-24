	<div class="card">
		<div class="card-header">
			Projects
		</div>
		<div class="list-group list-group-root well">
			@foreach(access()->profiles() as $profile)
				@if($profile->display_name !== access()->profile()->display_name)
				<a class="list-group-item" href="/switch/{{ $profile->type }}/{{ $profile->id }}">{{ $profile->display_name }}</a>
				@endif
			@endforeach
			<a class="list-group-item active" href="{{ route('actor.brand.new') }}"><i class="fa fa-plus fa-btn fa-fw"></i> New Organization</a>
		</ul>
	</div>
