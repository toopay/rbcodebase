@extends('includes.layouts.error')

@section('title', trans('http.404.title'))

@section('content')
	<form class="error-2 m-x-auto">
		<h1>404</h1>
		<h3 class="animated fadeIn delay-1000">{{ trans('http.404.title') }}</h3>
		<h4 class="animated fadeIn delay-1100">{{ trans('http.404.description') }}</h4>
		<a href="../../../../index.html" class="btn btn-flat color-danger btn-lg btn-block animated fadeIn delay-1200">Return to homepage</a>
	</form>
@endsection
