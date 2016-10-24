@extends('includes.layouts.error')

@section('title', trans('http.500.title'))

@section('content')
	<h1>500</h1>
	<h4 class="text-bold">{{ trans('http.500.title') }}</h4>
	<p>{{ trans('http.500.description') }}</p>
@endsection
