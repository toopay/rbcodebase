@extends('includes.layouts.auth')

@section('content')

	{{ Form::open(['route' => 'actor.user.auth.register', 'class' => 'form-horizontal']) }}
	<form  class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">

		<h3 class="m-b-20">{{ trans('labels.actor.user.auth.register_box_title') }}</h3>
		<p>
			Please enter your email address and password to create your account
		</p>
		<div class="form-group{{ $errors->has('name_first') ? ' has-error' : '' }}">
			{{ Form::label('name_first', trans('validation.attributes.frontend.name'), ['class' => 'bmd-label-floating']) }}
			{{ Form::input('name_first', 'name_first', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.name')]) }}
			<span class="bmd-help">Please enter your first name</span>
			@if ($errors->has('name_first'))
				<span class="help-block">
						<strong>{{ $errors->first('name_first') }}</strong>
					</span>
			@endif
		</div>
		<div class="form-group">
			{{ Form::label('name_last', trans('validation.attributes.frontend.name'), ['class' => 'bmd-label-floating']) }}
			{{ Form::input('name_last', 'name_last', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.name')]) }}
			<span class="bmd-help">Please enter your last name</span>
			@if ($errors->has('name_last'))
				<span class="help-block">
						<strong>{{ $errors->first('name_last') }}</strong>
					</span>
			@endif
		</div>
		<div class="form-group">
			{{ Form::label('email', trans('validation.attributes.frontend.email'), ['class' => 'bmd-label-floating']) }}
			{{ Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.email')]) }}
			<span class="bmd-help">Please enter your email</span>
			@if ($errors->has('email'))
				<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
			@endif
		</div>
		<div class="form-group">
			<label class="bmd-label-floating">Username</label>
			<input type="text" id="name_slug" name="name_slug" class="form-control">
			<span class="bmd-help">Please enter your username</span>
			@if ($errors->has('name_slug'))
				<span class="help-block">
						<strong>{{ $errors->first('name_slug') }}</strong>
					</span>
			@endif
		</div>
		<div class="form-group">
			{{ Form::label('password', trans('validation.attributes.frontend.password'), ['class' => 'bmd-label-floating']) }}
			{{ Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.password')]) }}
			<span class="bmd-help">Please enter your password</span>
			@if ($errors->has('password'))
				<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
			@endif
		</div>
		<div class="form-group">
			{{ Form::label('password_confirmation', trans('validation.attributes.frontend.password_confirmation'), ['class' => 'bmd-label-floating control-label']) }}
			{{ Form::input('password', 'password_confirmation', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.password_confirmation')]) }}
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

		@if (config('actor.captcha.registration'))
			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					{!! Form::captcha() !!}
					{{ Form::hidden('captcha_status', 'true') }}
				</div><!--col-md-6-->
			</div><!--form-group-->
		@endif

		{{ Form::submit(trans('labels.actor.user.auth.register_button'), ['class' => 'btn btn-raised btn-lg btn-secondary btn-block']) }}
		<p class="sign-up-link">I have an account <a href="{{ url('/login') }}">Sign in here</a></p>

		<p class="social-buttons">
			{!! $socialite_links !!}
		</p>
		{{ Form::close() }}

@endsection

@section('after-scripts-end')
	@if (config('actor.captcha.registration'))
		{!! Captcha::script() !!}
	@endif
@stop
