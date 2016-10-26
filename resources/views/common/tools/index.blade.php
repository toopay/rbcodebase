@extends('includes.layouts.master')

@section('content')

	<h1>Tools</h1>

	<hr>

	<div class="row">

		<div class="col-lg-4">
			<div class="card text-xs-center ">
			  <div class="card-header">
				Audits
			  </div>
			  <div class="card-block">
				<h4 class="card-title">Audits</h4>
				<p class="card-text">Learn opportunity areas.</p>
				<a href="{{ route('app.audit.index') }}" class="btn btn-primary">View Audits</a>
			  </div>
			</div>
		</div>

	</div>

@endsection
