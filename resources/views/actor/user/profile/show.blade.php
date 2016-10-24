@extends('includes.layouts.master')

@section('content')

	@if($user)
	<div class="col-xs-12 main" id="main">
		<div class="user-profile" style="background: url(/assets/backgrounds/background.jpg);">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<!-- div class="stats pull-right w-300 color-white">
							<div class="pull-left w-100 text-center">
								<h3 class="text-bold"> 4k </h3>
								<p class="text-sm">Followers</p>
							</div>
							<div class="pull-left w-100 text-center">
								<h3 class="text-bold"> 65 </h3>
								<p class="text-sm">Following</p>
							</div>
							<div class="pull-left w-100 text-center">
								<h3 class="text-bold"> 35 </h3>
								<p class="text-sm">Activities</p>
							</div>
						</div -->
						<div class="media">
							<a class="media-left">
								{{--<img class="media-object img-circle h-100 w-100" src="{!! access()->user()->picture ? url(access()->user()->picture) : get_gravatar(access()->user()->email) !!}" alt="{{ access()->user()->full_name }}" />--}}
							</a>
							<div class="media-body">
								<h1 class="color-white m-t-10"> {{ $user->name_first }} {{ $user->name_last }} </h1>
								<p class="text-muted color-white text-bold">
									<span class="text-xs color-white"><i class="fa fa-map-marker color-white m-r-10"></i>Location</span>
								</p>
								<div class="profile-buttons">
									<button type="button" class="btn btn-circle btn-facebook"><i class="fa fa-facebook"></i>
									</button>
									<button type="button" class="btn btn-circle btn-twitter"><i class="fa fa-twitter"></i>
									</button>
									<button type="button" class="btn btn-circle btn-google"><i class="fa fa-google-plus"></i>
									</button>
								</div>
								<p></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@else
		<p>Ack! We lost them!</p>
	@endif

@endsection
