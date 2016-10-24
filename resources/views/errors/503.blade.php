@extends('includes.layouts.error')

@section('title', trans('http.503.title'))

@section('content')
	<h1>503</h1>
	<h4 class="text-bold">{{ trans('http.503.title') }}</h4>
	<p>{{ trans('http.503.description') }}</p>
@endsection
