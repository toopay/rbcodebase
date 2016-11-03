@extends('includes.layouts.auth')

@section('content')

	<div class="login-page text-center animated fadeIn delay-2000 {{ $errors->has('password') ? ' has-error' : '' }}">
		<h1>
			{{ trans('labels.actor.user.auth.login_box_title') }}
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
								{{ Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.email')]) }}
								@if ($errors->has('email'))
									<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
								@endif
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group floating-labels">
								{{ Form::label('password', trans('validation.attributes.frontend.password'), ['class' => 'col-md-4 control-label']) }}
								{{ Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.password')]) }}
								@if ($errors->has('password'))
									<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
								@endif
							</div>
						</div>
					</div>
					<div class="row m-b-40">
						<div class="col-xs-12">
							<div class="checkbox">
								<label>
									{{ Form::checkbox('remember') }} {{ trans('labels.actor.user.auth.remember_me') }}
								</label>
							</div>
						</div>
					</div>

					<div class="row buttons">
						<div class="col-xs-12 col-md-6">
							{{ Form::submit(trans('labels.actor.user.auth.login_button'), ['class' => 'btn btn-primary', 'style' => 'margin-right:15px']) }}

							{{ link_to_route('actor.user.auth.password.reset', trans('labels.frontend.passwords.forgot_password')) }}
						</div>
						<div class="col-xs-12 col-md-6"> <a href="{{ route('actor.user.auth.register') }}" class="btn btn-lg btn-danger btn-block m-b-20">Register</a>
						</div>
					</div>

				{!! Form::close() !!}
			</div>
		</div>
		<p class="social-buttons">
			{!! $socialite_links !!}
		</p>
		<p class="copyright text-sm">
			@include('includes.partials.footer_credit')
			<br />
			@include('includes.partials.footer_links')
		</p>
	</div>
@endsection
