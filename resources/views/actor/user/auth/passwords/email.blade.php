@extends('includes.layouts.auth')

<!-- Main Content -->
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">{{ trans('labels.frontend.passwords.reset_password_box_title') }}</div>
				<div class="panel-body">
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif

					{{ Form::open(['route' => 'actor.user.auth.password.email', 'class' => 'form-horizontal']) }}

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							{{ Form::label('email', trans('validation.attributes.frontend.email'), ['class' => 'control-label']) }}
							{{ Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.email')]) }}

							@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								{{ Form::submit(trans('labels.frontend.passwords.send_password_reset_link_button'), ['class' => 'btn btn-primary']) }}
							</div>
						</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
