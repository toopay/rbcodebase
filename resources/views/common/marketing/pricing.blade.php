@extends('includes.layouts.public')

@section('content')

	<h3>Personal</h3>
	<h1>
		<sup>$</sup>
		<span>9</span>
		<span class="text-xs"> / month</span>
	</h1>
	</div>
	<div class="inner">
		<div class="table-responsive">
			<table class="table table-hover table-striped">
				<tbody>
					<tr>
						<td>
							<i class="fa fa-check color-success"></i>
							<span class="text">Tutorials</span>
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-check color-success"></i>
							<span class="text">Webinars</span>
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-check color-success"></i>
							<span class="text">Marketplace Access</span>
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-check color-success"></i>
							<span class="text">Identity Tools</span>
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-remove color-danger"></i>
							<span class="text">Teams</span>
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-remove color-danger"></i>
							<span class="text">All Tools</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<button class="btn btn-success">Start trial</button>
		</div>
	</div>
	<div class="col-xs-12 col-lg-4 text-center t2">
		<div class="header">
		<h3>Startup</h3>
		<h1>
			<sup>$</sup>
			<span>49</span>
			<span class="text-xs"> / month</span>
		</h1>
		</div>
		<div class="inner">
			<div class="table-responsive">
				<table class="table table-hover table-striped">
					<tbody>


					</tbody>
				</table>
			</div>
			<button class="btn btn-danger btn-lg">Start trial</button>
		</div>
	</div>
	<div class="col-xs-12 col-lg-4 text-center t3">
		<div class="header">
			<h3>Business</h3>
			<h1>
				<sup>$</sup>
				<span>249</span>
				<span class="text-xs"> / month</span>
			</h1>
		</div>
	<div class="inner">
	<div class="table-responsive">
		<table class="table table-hover table-striped">
			<tbody>

			</tbody>
		</table>
	</div>
	<button class="btn btn-warning">Start trial</button>

@endsection

@section('after-scripts-end')
@stop
