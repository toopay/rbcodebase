@extends('includes.layouts.auth')

@section('content')
	<div class="login-page text-center animated fadeIn delay-2000">
		<h1>
			Account login
		</h1>
		<h4>
			Please enter your email address and password to login
		</h4>

		<div class="row">

			<div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4">

				@include('includes.partials.messages')

				{!! Form::open(['url' => 'login', 'class' => 'form sign-in']) !!}

					<div class="row">
						<div class="col-xs-12">
							<div class="form-group floating-labels">
								{!! Form::label('email', trans('validation.attributes.app.email')) !!}
								{!! Form::input('email', 'email', null,['class' => 'form-control']) !!}
							</div>
						</div>
					</div>
					<div class="row m-b-40">
						<div class="col-xs-12">
							<div class="form-group floating-labels">
								{!! Form::label('password', trans('validation.attributes.app.password')) !!}
								{!! Form::input('password', 'password', null,['class' => 'form-control']) !!}
							</div>
						</div>
					</div>

					<div class="row buttons">
						<div class="col-xs-12 col-md-6">
							{!! Form::submit(trans('labels.app.auth.login_button'), ['class' => 'btn btn-raised btn-lg btn-secondary btn-block']) !!}

							{!! link_to('password/reset', trans('labels.app.passwords.forgot_password'), ['class' => 'pull-left']) !!}
						</div>
						<div class="col-xs-12 col-md-6"> <a href="{{ route('actor.user.auth.register') }}" class="btn btn-lg btn-danger btn-block m-b-20">Register</a>
						</div>
					</div>

				{!! Form::close() !!}
			</div>
		</div>
		<p class="social-buttons">
			<a href="{{ url('login/facebook') }}" class="btn btn-solid btn-circle btn-lg"><i class="fa fa-facebook"></i></a>
			<a href="{{ url('login/twitter') }}" class="btn btn-solid btn-circle btn-lg"><i class="fa fa-twitter"></i></a>
			<a href="{{ url('login/google') }}" class="btn btn-solid btn-circle btn-lg"><i class="fa fa-google"></i></a>
			<a href="{{ url('login/linkedin') }}" class="btn btn-solid btn-circle btn-lg"><i class="fa fa-linkedin"></i></a>
			<a href="{{ url('login/github') }}" class="btn btn-solid btn-circle btn-lg"><i class="fa fa-github"></i></a>
		</p>
		<p class="copyright text-sm">
			@include('includes.partials.footer_credit')
			<br />
			@include('includes.partials.footer_links')
		</p>
	</div>
@endsection
