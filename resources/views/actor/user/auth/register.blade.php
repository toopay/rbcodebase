@extends('includes.layouts.auth')

@section('content')
	<div class="create-account-page text-center animated fadeIn delay-2000">
		<h1>
			Create account
		</h1>
		<h4>
			Please enter your email address and password to create your account
		</h4>

		<div class="row">
			<div class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4">

				@include('includes.partials.messages')

				{!! Form::open(['url' => 'register']) !!}
					<div class="row">
						<div class="col-xs-12 col-xl-6">
							<div class="form-group floating-labels">
								{!! Form::label('name_first', trans('validation.attributes.app.name_first')) !!}
								{!! Form::text('name_first', old('name_first')) !!}
								<p class="error-block"></p>
							</div>
						</div>
						<div class="col-xs-12 col-xl-6">
							<div class="form-group floating-labels">
								{!! Form::label('name_last', trans('validation.attributes.app.name_last')) !!}
								{!! Form::text('name_last') !!}
								<p class="error-block"></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-xl-6">
							<div class="form-group floating-labels">
								{!! Form::label('email', trans('validation.attributes.app.email')) !!}
								{!! Form::email('email') !!}
								<p class="error-block"></p>
							</div>
						</div>
						<div class="col-xs-12 col-xl-6">
							<div class="form-group floating-labels">
								{!! Form::label('name_slug', trans('validation.attributes.app.name_slug')) !!}
								{!! Form::text('name_slug') !!}
								<p class="error-block"></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-xl-6">
							<div class="form-group floating-labels">
								{!! Form::label('password', trans('validation.attributes.app.password')) !!}
								{!! Form::password('password') !!}
								<p class="error-block"></p>
							</div>
						</div>
						<div class="col-xs-12 col-xl-6">
							<div class="form-group floating-labels">
								{!! Form::label('password_confirmation', trans('validation.attributes.app.password_confirmation')) !!}
								{!! Form::password('password_confirmation', ['id' => 'password_confirmation']) !!}
								<p class="error-block"></p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-xl-6">
							@if(\App\Models\Actor\User\UserType::showOnRegistration()->exists())
								<div class="form-group">
									{!! Form::label('types', 'Type') !!}
									@foreach(\App\Models\Actor\User\UserType::showOnRegistration()->get(['id', 'title']) as $type)
										<div class="checkbox">
											<label>
												<input type="checkbox" name="types[]" value="{{ $type->id }}"> {{ $type->title }}
											</label>
										</div>
									@endforeach
								</div>
							@endif
						</div>
					</div>

					<br />

					<p class="text-center">By clicking on create account, you agree to our <a href="/legal#terms" target="_blank">terms of service</a> and that you have read our <a href="/legal#privacy" target="_blank">privacy policy</a>.</p>

					<div class="row buttons">
						<div class="col-xs-12">
							{!! Form::submit(trans('labels.app.auth.register_button'), ['class' => 'btn btn-lg btn-info btn-block no-border']) !!}
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
		<p class="social-buttons">
			<a href="{{ url('login/facebook') }}" class="btn btn-solid btn-circle btn-facebook btn-lg"><i class="fa fa-facebook"></i></a>
			<a href="{{ url('login/twitter') }}" class="btn btn-solid btn-circle btn-twitter btn-lg"><i class="fa fa-twitter"></i></a>
			<a href="{{ url('login/linkedin') }}" class="btn btn-solid btn-circle btn-google btn-lg"><i class="fa fa-linkedin"></i></a>
		</p>
		<p class="copyright text-sm">
			@include('includes.partials.footer_credit')
			<br />
			@include('includes.partials.footer_links')
		</p>
	</div>
@endsection

@section('after-scripts-end')
	<script src="/assets/js/pages-register.js"></script>
@endsection
