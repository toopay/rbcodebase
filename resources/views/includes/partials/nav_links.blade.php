<nav class="navbar">
	<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">&#9776;</button>
	<div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
		<ul class="nav navbar-nav">
			<li class="nav-item {{ Active::pattern('/') }}">
				<a class="nav-link" href="{!! route('marketing.index') !!}">Home</a>
			</li>
			<li class="nav-item {{ Active::pattern('features*') }}">
				<a class="nav-link" href="{!! route('marketing.features') !!}">Features</a>
			</li>
			{{--
			<li class="nav-item {{ Active::pattern('pricing') }}">
				<a class="nav-link" href="{!! route('marketing.pricing') !!}">Pricing</a>
			</li>
			--}}
			<li class="nav-item {{ Active::pattern('about*') }}">
				<a class="nav-link" href="{!! route('marketing.about') !!}">About</a>
			</li>
		</ul>
		<ul class="nav navbar-nav">
			<li class="nav-item dropdown p-l-20">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Do It <strong>Yourself</strong></a>
				<div class="dropdown-menu dropdown-menu-scale from-right dropdown-menu-right">
					<a class="dropdown-item {{ Active::pattern('forum*') }}" href="{!! route('app.forum.index') !!}">Forum</a>
					<a class="dropdown-item {{ Active::pattern('glossary*') }}" href="{!! route('app.term.index') !!}">Glossary</a>
					<a class="dropdown-item {{ Active::pattern('course*') }}" href="{!! route('app.course.index') !!}">eCourse</a>
					<a class="dropdown-item {{ Active::pattern('tools*') }}" href="{!! route('tools.index') !!}">Tools</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Do It <strong>For Me</strong></a>
				<div class="dropdown-menu">
					<a class="dropdown-item {{ Active::pattern('audit*') }}" href="{!! route('app.audit.index') !!}">Audit</a>
					<a class="dropdown-item {{ Active::pattern('services*') }}" href="{!! route('app.service.index') !!}">Services</a>
				</div>
			</li>
		</ul>

	</div>
</nav>
