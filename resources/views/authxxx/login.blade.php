@extends('includes.layouts.auth')

@section('content')

	<form  class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
		{{ csrf_field() }}

		<h3>Sign in</h3>
		<p>
			Please enter your email address and password to login
		</p>
		
		<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
			<label for="email" class="bmd-label-floating">Email address</label>
			<input type="email" name="email" id="email" class="form-control" required>
			<span class="bmd-help">Please enter your email</span>

			@if ($errors->has('email'))
				<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
			@endif
		</div>

		<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
			<label for="password" class="bmd-label-floating">Password</label>
			<input type="password" name="password" id="password" class="form-control" required>
			<span class="bmd-help">Please enter your password</span>

			@if ($errors->has('email'))
				<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
			@endif
		</div>

		<div class="checkbox checkbox-secondary">
			<label>
				<input type="checkbox" value="remember-me">Remember me
			</label>
		</div>

		<button class="btn btn-raised btn-lg btn-secondary btn-block" type="submit">Sign in</button>

		<div class="form-group">
			<div class="col-md-8 col-md-offset-4">
				<a class="btn btn-link" href="{{ url('/password/reset') }}">
					Forgot Your Password?
				</a>
			</div>
			<p class="sign-up-link">Don't have an account? <a href="{{ url('/register') }}">Sign up here</a></p>
		</div>

		<div class="btn-group btn-group-justified">
			<a href="{{ url('/login/github') }}" class="btn btn-github btn-icon"><i class="fa fa-fw fa-github" aria-hidden="true"></i> GitHub</a>
			<a href="{{ url('/login/twitter') }}" class="btn btn-twitter  btn-icon"><i class="fa fa-fw fa-twitter" aria-hidden="true"></i> Twitter</a>
			<a href="{{ url('/login/facebook') }}" class="btn btn-facebook  btn-icon"><i class="fa fa-fw fa-facebook" aria-hidden="true"></i> Facebook</a>
			<a href="{{ url('/login/google') }}" class="btn btn-google-plus  btn-icon"><i class="fa fa-fw fa-google-plus" aria-hidden="true"></i> Google</a>
			<a href="{{ url('/login/linkedin') }}" class="btn btn-linkedin  btn-icon"><i class="fa fa-fw fa-google-plus" aria-hidden="true"></i> LinkedIn</a>
		</div>
	</form>

@endsection
