@extends('includes.layouts.auth')

@section('content')
	<form  class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
		{{ csrf_field() }}
		<h3 class="m-b-20">Create account</h3>
		<p>
			Please enter your email address and password to create your account
		</p>
		<div class="form-group">
			<label class="bmd-label-floating">First name</label>
			<input type="text" id="first_name" name="first_name" class="form-control">
			<span class="bmd-help">Please enter your first name</span>
			@if ($errors->has('first_name'))
				<span class="help-block">
						<strong>{{ $errors->first('first_name') }}</strong>
					</span>
			@endif
		</div>
		<div class="form-group">
			<label class="bmd-label-floating">Last name</label>
			<input type="text" id="last_name" name="last_name" class="form-control">
			<span class="bmd-help">Please enter your last name</span>
			@if ($errors->has('last_name'))
				<span class="help-block">
						<strong>{{ $errors->first('last_name') }}</strong>
					</span>
			@endif
		</div>
		<div class="form-group">
			<label class="bmd-label-floating">Email address</label>
			<input type="email" id="email" name="email" class="form-control">
			<span class="bmd-help">Please enter your email</span>
			@if ($errors->has('email'))
				<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
			@endif
		</div>
		<div class="form-group">
			<label class="bmd-label-floating">Username</label>
			<input type="text" id="username" name="username" class="form-control">
			<span class="bmd-help">Please enter your username</span>
			@if ($errors->has('username'))
				<span class="help-block">
						<strong>{{ $errors->first('username') }}</strong>
					</span>
			@endif
		</div>
		<div class="form-group">
			<label class="bmd-label-floating">Password</label>
			<input type="password" id="password" name="password" class="form-control">
			<span class="bmd-help">Please enter your password</span>
			@if ($errors->has('password'))
				<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
			@endif
		</div>
		<div class="form-group">
			<label class="bmd-label-floating">Password confirmation</label>
			<input type="password" id="password-confirmation" name="password_confirmation" class="form-control">
			<span class="bmd-help">Please enter your password again</span>
		</div>
		@if ($errors->has('password_confirmation'))
			<span class="help-block">
						<strong>{{ $errors->first('password_confirmation') }}</strong>
					</span>
		@endif
		<div class="checkbox checkbox-secondary">
			<label>
				<input type="checkbox" value="agree">By clicking on create account, you agree to our terms of service and
													that you have read our privacy policy, including our cookie use policy
			</label>
		</div>
		<button class="btn btn-raised btn-lg btn-secondary btn-block" type="submit">Sign up</button>
		<p class="sign-up-link">I have an account <a href="{{ url('/login') }}">Sign in here</a></p>

		<p class="social-buttons">
			<a href="{{ url('login/facebook') }}" class="btn btn-solid btn-circle btn-facebook btn-lg"><i class="fa fa-facebook"></i></a>
			<a href="{{ url('login/twitter') }}" class="btn btn-solid btn-circle btn-twitter btn-lg"><i class="fa fa-twitter"></i></a>
			<a href="{{ url('login/linkedin') }}" class="btn btn-solid btn-circle btn-google btn-lg"><i class="fa fa-linkedin"></i></a>
		</p>
	</form>
@endsection