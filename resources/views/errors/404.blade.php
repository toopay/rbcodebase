@extends('includes.layouts.error')

@section('title', trans('http.404.title'))

@section('content')
	<h1>404</h1>
	<h4 class="text-bold">{{ trans('http.404.title') }}</h4>
	<p>{{ trans('http.404.description') }}</p>
@endsection
