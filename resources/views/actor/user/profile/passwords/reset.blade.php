@extends('includes.layouts.master')

@section('content')

<div class="container m-t-30">
	<div class="row">
		<div class="col-lg-8">

			<h2>{{ trans('labels.app.passwords.reset_password_box_title') }}</h2>

			@if (session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
			@endif

			{!! Form::open(['url' => 'password/reset', 'class' => 'form-horizontal']) !!}

			<input type="hidden" name="token" value="{{ $token }}">

				<div class="form-group">
					{!! Form::label('email', trans('validation.attributes.app.email')) !!}
					{!! Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.app.email')]) !!}
				</div><!--form-group-->

				<div class="form-group">
					{!! Form::label('password', trans('validation.attributes.app.password')) !!}
					{!! Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.app.password')]) !!}
				</div><!--form-group-->

				<div class="form-group">
					{!! Form::label('password_confirmation', trans('validation.attributes.app.password_confirmation')) !!}
					{!! Form::input('password', 'password_confirmation', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.app.password_confirmation')]) !!}
				</div><!--form-group-->

				<div class="form-group">
					{!! Form::submit(trans('labels.app.passwords.reset_password_button'), ['class' => 'btn btn-primary']) !!}
				</div><!--form-group-->

			{!! Form::close() !!}

		</div>
		<div class="col-lg-4">

			@include('actor.user.partials.nav_settings')

		</div>
	</div>
</div>

@endsection
