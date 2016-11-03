@extends('includes.layouts.auth')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">{{ trans('labels.frontend.passwords.reset_password_box_title') }}</div>

				<div class="panel-body">
					{{ Form::open(['route' => 'actor.user.auth.password.reset', 'class' => 'form-horizontal']) }}

						<input type="hidden" name="token" value="{{ $token }}">

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							{{ Form::label('email', trans('validation.attributes.frontend.email'), ['class' => 'col-md-4 control-label']) }}

							<div class="col-md-6">
								<input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

								@if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							{{ Form::label('password', trans('validation.attributes.frontend.password'), ['class' => 'col-md-4 control-label']) }}
							<div class="col-md-6">
								{{ Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.password')]) }}

								@if ($errors->has('password'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
							{{ Form::label('password_confirmation', trans('validation.attributes.frontend.password_confirmation'), ['class' => 'col-md-4 control-label']) }}
							<div class="col-md-6">
								{{ Form::input('password', 'password_confirmation', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.password_confirmation')]) }}

								@if ($errors->has('password_confirmation'))
									<span class="help-block">
										<strong>{{ $errors->first('password_confirmation') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								{{ Form::submit(trans('labels.frontend.passwords.reset_password_button'), ['class' => 'btn btn-primary']) }}
							</div>
						</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
