@extends('includes.layouts.master')

@section('content')


<div class="container m-t-30">
	<div class="row">
		<div class="col-lg-8">

			@TODO: Create SSO Links
			<div class="m-t-10">
				<a href="#">
					<button class="btn btn-default">
						<i class="fa fa-btn fa-github fa-fw"></i>Connect To GitHub
					</button>
				</a>
			</div>

			<div class="m-t-10">
				<a href="#">
					<button class="btn btn-default">
						<i class="fa fa-btn fa-facebook fa-fw"></i>Connect To Facebook
					</button>
				</a>
			</div>

			<div class="m-t-10">
				<a href="#">
					<button class="btn btn-default">
						<i class="fa fa-btn fa-twitter fa-fw"></i>Connect To Twitter
					</button>
				</a>
			</div>

			<div class="m-t-10">
				<a href="#">
					<button class="btn btn-default">
						<i class="fa fa-btn fa-google fa-fw"></i>Connect To Google
					</button>
				</a>
			</div>


		</div>
		<div class="col-lg-4">

			@include('actor.user.partials.nav_settings')

		</div>
	</div>
</div>

@endsection
