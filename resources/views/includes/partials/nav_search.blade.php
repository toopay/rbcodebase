<!-- Search -->
<ul class="nav navbar-nav pull-left hidden-sm-down toggle-search">
	<li class="nav-item">
		<a class="nav-link" data-click="toggle-search"><i class="zmdi zmdi-search"></i></a>
	</li>
</ul>
<div class="navbar-drawer pull-left hidden-lg-down">
	{!! Form::open(array('route' => 'search', 'class' => 'form-inline navbar-form')) !!}
		<input class="form-control" type="text" placeholder="Search" name="query">
	{!! Form::close() !!}
</div>
<!-- End Search -->
