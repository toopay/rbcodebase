@extends('includes.layouts.master')

@section('content')


<div class="container m-t-30">
	<div class="row">
		<div class="col-lg-8">


			<div class="user-widget-11">
				<div class="row">
					<div class="col-xs-12">
						<a class="media-left media-middle">
							<img class="media-object img-circle h-100 w-100" alt="{!! $user->name_first !!} {!! $user->name_last !!}" src="{!! $user->picture !!}" />
						</a>
						<div class="media-body">
							<div class="p-10 m-t-5">
								<h5 class="text-bold color-white">{!! $user->name_first !!} {!! $user->name_last !!}</h5>
								<p class="m-b-0">
									<i class="fa fa-map-marker color-white"></i> <span class="color-white">Created {!! $user->created_at->diffForHumans() !!}.  Updated {!! $user->updated_at->diffForHumans() !!}</span>
								</p>
							</div>
							<div class="p-10 p-t-15">
								<p><i class="fa fa-envelope-o color-dark"></i> <span class="color-dark">{!! $user->email !!}</span> </p>
								<p><i class="fa fa-link color-dark"></i> @<span class="color-dark">{!! $user->name_slug !!}</span> </p>
							</div>
						</div>
					</div>
				</div>
			</div>

			@if($usermeta->count())
			Custom Meta:<br />
				@foreach($usermeta as $userfield)
					{!! $userfield->title !!}: {!! $userfield->user_meta->value !!}<br />
				@endforeach
			@endif

		</div>
		<div class="col-lg-4">

			@include('actor.user.partials.nav_settings')

			@include('actor.user.partials.nav_brands')

		</div>
	</div>
</div>

@endsection
