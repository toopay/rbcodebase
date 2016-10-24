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

				{!! Form::open(['url' => 'password/email', 'class' => 'form-horizontal']) !!}

					<div class="form-group">
						{!! Form::label('email', trans('validation.attributes.app.email')) !!}
						{!! Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.app.email')]) !!}
					</div><!--form-group-->

					<div class="form-group">
						{!! Form::submit(trans('labels.app.passwords.send_password_reset_link_button'), ['class' => 'btn btn-primary']) !!}
					</div><!--form-group-->

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
