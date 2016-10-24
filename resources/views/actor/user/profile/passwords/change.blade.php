@extends('includes.layouts.master')

@section('content')

<div class="container m-t-30">
	<div class="row">
		<div class="col-lg-8">

				<h2>{{ trans('labels.app.user.passwords.change') }}</h2>

				{!! Form::open(['route' => ['actor.user.profile.password.update'], 'class' => 'form-horizontal']) !!}

					<div class="form-group">
						{!! Form::label('old_password', trans('validation.attributes.app.old_password')) !!}
						{!! Form::input('password', 'old_password', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.app.old_password')]) !!}
					</div>

					<div class="form-group">
						{!! Form::label('password', trans('validation.attributes.app.new_password')) !!}
						{!! Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.app.new_password')]) !!}
					</div>

					<div class="form-group">
						{!! Form::label('password_confirmation', trans('validation.attributes.app.new_password_confirmation')) !!}
						{!! Form::input('password', 'password_confirmation', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.app.new_password_confirmation')]) !!}
					</div>

					<div class="form-group">
						{!! Form::submit(trans('labels.general.buttons.update'), ['class' => 'btn btn-primary']) !!}
					</div>

				{!! Form::close() !!}

			</div>
			<div class="col-lg-4">
				@if(!empty($user))
					@include('actor.user.partials.nav_settings')
				@endif
			</div>
		</div>
	</div>

@endsection
