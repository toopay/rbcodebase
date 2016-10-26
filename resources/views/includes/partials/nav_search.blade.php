<!-- Search -->
<div class="left-sidebar-search">
	{!! Form::open(array('route' => 'search', 'class' => 'form-inline form-custom')) !!}
		<i class="material-icons">search</i>
		<div class="form-group">
			<label for="search" class="bmd-label-floating">Search</label>
			<input type="text" class="form-control" id="search" name="query" />
		</div>
	{!! Form::close() !!}
</div>
<!-- End Search -->
