@extends('includes.layouts.master')
@section('meta')
<meta name="robots" CONTENT="noindex, nofollow" />
@endsection
@section('content')

<div class="container">
	<div class="col-xs-12">
		<div class="search-results">
			<h3> <span>{{ $count }} results found for</span> <span class="text-success">&quot;{{ $query }}&quot;</span> </h3>
			<!--p><small>Request time (0.15 seconds)</small></p -->
		</div>
	</div>
	<div class="row m-b-20">
		<div class="col-xs-12">
			<div class="search-form m-b-20">
				{!! Form::open(array('route' => 'search')) !!}
					<div class="input-group">
						<input type="text" class="form-control form-control-lg" placeholder="Enter a search term" value="{{ $query }}" name="query">
						<div class="input-group-addon"><i class="fa fa-search p-l-10 p-r-10"></i></div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
	<div class="row m-b-20 search-results">
		<div class="col-xs-12">

			@if (!empty($terms))
			<hr class="m-y-2">
			<h2>Glossary</h2>
				@foreach($terms as $term)
				<div class="result">
					<h3 class="m-b-10"><a href="{!! route('app.term.show', $term->slug) !!}">{!! $term->title !!}</a> </h3>
					<p class="m-b-10"><a href="{!! route('app.term.show', $term->slug) !!}" class="link">{!! route('app.term.show', $term->slug) !!}</a></p>
					<p class="description">{!! $term->getText() !!}</p>
				</div>
				@endforeach
			@endif

			{{--
			<hr class="m-y-2">
			<h2>CMS</h2>
			@TODO
			--}}

			@if (!empty($forum_threads))
			<hr class="m-y-2">
			<h2>Forum</h2>
				@foreach($forum_threads as $forum_thread)
				<div class="result">
					<h3 class="m-b-10"><a href="{!! route('app.forum.thread', array($forum_thread->topic->slug, $forum_thread->slug)) !!}">{!! $forum_thread->title !!}</a> </h3>
					<p class="m-b-10"><a href="{!! route('app.forum.thread', array($forum_thread->topic->slug, $forum_thread->slug)) !!}" class="link">{!! route('app.forum.thread', array($forum_thread->topic->slug, $forum_thread->slug)) !!}</a></p>
					<p class="description">{!! $forum_thread->text !!}</p>
				</div>
				@endforeach
			@endif


			@if (!empty($users))
			<hr class="m-y-2">
			<h2>Users</h2>
				@foreach($users as $user)
				<div class="result">
					<h3 class="m-b-10"><a href="{!! route('actor.user.profile.show', $user->name_slug) !!}">{!! $user->name_first !!} {!! $user->name_last !!}</a> </h3>
					<p class="m-b-10"><a href="{!! route('actor.user.profile.show', $user->name_slug) !!}" class="link">{!! route('actor.user.profile.show', $user->name_slug) !!}</a></p>
					<p class="description">Public user profile for {!! $user->name_first !!} {!! $user->name_last !!}</p>
				</div>
				@endforeach
			@endif

			<!-- div class="text-left m-t-10">
				<nav>
					<ul class="pagination">
						<li class="page-item">
							<a class="page-link" aria-label="Previous"> <span aria-hidden="true">&laquo;</span>  <span class="sr-only">Previous</span>
							</a>
						</li>
						<li class="page-item"><a class="page-link">1</a>
						</li>
						<li class="page-item"><a class="page-link">2</a>
						</li>
						<li class="page-item"><a class="page-link">3</a>
						</li>
						<li class="page-item"><a class="page-link">4</a>
						</li>
						<li class="page-item"><a class="page-link">5</a>
						</li>
						<li class="page-item">
							<a class="page-link" aria-label="Next"> <span aria-hidden="true">&raquo;</span>  <span class="sr-only">Next</span>
							</a>
						</li>
					</ul>
				</nav>
			</div -->
		</div>
	</div>
</div>

@endsection
