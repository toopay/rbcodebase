@extends('includes.layouts.master')

@section('content')

<div class="container m-t-30">
	<div class="row">
		<div class="col-lg-8">

				<h2>{{ trans('labels.app.user.profile.update_information') }}</h2>

				{!! Form::model($user, ['route' => 'actor.user.profile.update', 'class' => 'form-horizontal', 'method' => 'PATCH']) !!}

					<div class="form-group">
						{!! Form::label('name_first', trans('validation.attributes.app.name_first')) !!}
						{!! Form::input('text', 'name_first', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.app.name_first')]) !!}
					</div>

					<div class="form-group">
						{!! Form::label('name_last', trans('validation.attributes.app.name_last')) !!}
						{!! Form::input('text', 'name_last', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.app.name_last')]) !!}
					</div>

					<div class="form-group">
						{!! Form::label('name_slug', trans('validation.attributes.app.name_slug')) !!}
						{!! Form::input('text', 'name_slug', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.app.name_slug')]) !!}
					</div>


					@if ($user->canChangeEmail())
					<div class="form-group">
						{!! Form::label('email', trans('validation.attributes.app.email')) !!}
						{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.app.email')]) !!}
					</div>
					@endif

					<!--- Language Field --->
					<div class="form-group">
						{!! Form::label('language', 'Language:') !!}
						{!! Form::select('language', ['' => '-- Select Language --'] + get_language_list(), $user->language, ['class' => 'form-control']) !!}
					</div>

					<!--- Timezone Field --->
					<div class="form-group">
						{!! Form::label('timezone', 'Timezone:') !!}
						{!! Form::select('timezone', ['' => '-- Select Timezone --'] + get_timezone_list(), $user->timezone, ['class' => 'form-control']) !!}
					</div>

					@if($allUserTypes->count())
					<div class="form-group">
						{!! Form::label('types', 'Type') !!}
						@foreach($allUserTypes as $type)
							<div class="checkbox">
								<label>
									<input type="checkbox" name="types[]" value="{{ $type->id }}" {{ in_array($type->id, $userTypes) ? 'checked' : '' }}> {{ $type->title }}
								</label>
							</div>
						@endforeach
					</div>
					@endif

					<div class="form-group">
						{!! Form::submit(trans('labels.general.buttons.save'), ['class' => 'btn btn-primary']) !!}
					</div>

				{!! Form::close() !!}

				@if($customFields->count())
					<h2>Other Information</h2>

					{!! Form::open(['route' => 'actor.user.profile.meta.update', 'class' => 'form-horizontal', 'method' => 'PATCH']) !!}

					@foreach($customFields as $field)
						<div class="form-group">
							<label class="text-capitalize">{!! $field->title !!}</label>
							{!! $field->render() !!}
						</div>
					@endforeach

					<div class="form-group">
						{!! Form::submit(trans('labels.general.buttons.save'), ['class' => 'btn btn-primary']) !!}
					</div>

					{!! Form::close() !!}
				@endif



			</div>
			<div class="col-lg-4">
				@if(!empty($user))
					@include('actor.user.partials.nav_settings')
				@endif
			</div>
		</div>
	</div>

@endsection
