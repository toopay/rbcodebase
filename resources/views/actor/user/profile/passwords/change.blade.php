@extends('includes.layouts.master')

@section('content')

<div class="container m-t-30">
	<div class="row">
		<div class="col-lg-8">

				<h2>{{ trans('labels.app.user.passwords.change') }}</h2>

				{{ Form::open(['route' => ['actor.user.auth.password.change'], 'class' => 'form-horizontal', 'method' => 'patch']) }}

					<div class="form-group">
						{{ Form::label('old_password', trans('validation.attributes.frontend.old_password'), ['class' => 'col-md-4 control-label']) }}
						<div class="col-md-6">
							{{ Form::input('password', 'old_password', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.old_password')]) }}
						</div>
					</div>

					<div class="form-group">
						{{ Form::label('password', trans('validation.attributes.frontend.new_password'), ['class' => 'col-md-4 control-label']) }}
						<div class="col-md-6">
							{{ Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.new_password')]) }}
						</div>
					</div>

					<div class="form-group">
						{{ Form::label('password_confirmation', trans('validation.attributes.frontend.new_password_confirmation'), ['class' => 'col-md-4 control-label']) }}
						<div class="col-md-6">
							{{ Form::input('password', 'password_confirmation', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.new_password_confirmation')]) }}
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							{{ Form::submit(trans('labels.general.buttons.update'), ['class' => 'btn btn-primary']) }}
						</div>
					</div>

				{{ Form::close() }}

			</div>
			<div class="col-lg-4">
				@if(!empty($user))
					@include('actor.user.partials.nav_settings')
				@endif
			</div>
		</div>
	</div>

@endsection
