@if (isset($breadcrumbs))
	<ol class="breadcrumb breadcrumb-bg icon-angle-right">
		@foreach ($breadcrumbs as $breadcrumb)
			@if (!$breadcrumb->last)
				<li><a href="{{ $breadcrumb->url }}">{!! $breadcrumb->title !!}</a></li>
			@else
				<li class="active">{!! $breadcrumb->title !!}</li>
			@endif
		@endforeach
	</ol>
@endif
