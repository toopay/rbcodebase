@extends('includes.layouts.public')

@section('content')

	<h2 class="display-3 m-t-20">Product Roadmap</h2>

	<div class="row">
		<div class="col-md-6">

			<h3 class="display-5 m-t-20">Updates</h2>
			<div class="timeline-widget-4">
				<div class="row bg-odd-color">
					<div class="col-xs-12 timeline timeline-success">
						<div class="p-10">
							<p class="text-sm text-muted pull-right">Oct 15, 2016</p>
							<p>
								Add SSO for Twitter/Facebook/LinkedIn/Google/BitBucket/GitHub<br />
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="timeline-widget-4">
				<div class="row bg-even-color">
					<div class="col-xs-12 timeline timeline-danger">
						<div class="p-10">
							<p class="text-sm text-muted pull-right">Oct 9, 2016</p>
							<p>
								Add machine readability/SEO optimize platform<br />
								Enhance User Navigation with Sidebar<br />
								Enhance Brand navigation with Sidebar<br />
								Create brand selection view<br />
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="timeline-widget-4">
				<div class="row bg-odd-color">
					<div class="col-xs-12 timeline timeline-info">
						<div class="p-10">
							<p class="text-sm text-muted pull-right">Oct 2, 2016</p>
							<p>
								Upgrade to Laravel 5.3<br />
								Add Video Embed to Course<br />
								Enhance "intended" Login redirects<br />
							</p>
						</div>
					</div>
				</div>
				<div class="row bg-even-color">
					<div class="col-xs-12 timeline timeline-success">
						<div class="p-10">
							<p class="text-sm text-muted pull-right">Sept 25, 2016</p>
							<p>
								Added <a href="{!! route('app.service.index') !!}">Services</a> stub<br />
								Added <a href="{!! route('app.audit.index') !!}">Audit</a> stub<br />
								Added <a href="{!! route('tools.index') !!}">Tools</a> starter<br />
							</p>
						</div>
					</div>
				</div>
				<div class="row bg-odd-color">
					<div class="col-xs-12 timeline timeline-warning">
						<div class="p-10">
							<p class="text-sm text-muted pull-right">Sept 18, 2016</p>
							<p>
								Added <a href="{!! route('app.course.index') !!}">eCourse</a><br />
								Add global "Topics"<br />
								Add Topic filter to <a href="{!! route('app.term.index') !!}">Glossary</a><br />
							</p>
						</div>
					</div>
				</div>
				<div class="row bg-even-color">
					<div class="col-xs-12 timeline timeline-info">
						<div class="p-10">
							<p class="text-sm text-muted pull-right">Sept 11, 2016</p>
							<p>
								Brand management<br />
								Subscription management<br />
							</p>
						</div>
					</div>
				</div>
				<div class="row bg-odd-color">
					<div class="col-xs-12 timeline timeline-danger">
						<div class="p-10">
							<p class="text-sm text-muted pull-right">July 24, 2016</p>
							<p>
								<a href="{!! route('app.forum.index') !!}">Forum</a><br />
								<a href="{!! route('app.term.index') !!}">Glossary Terms</a><br />
								<a href="/search">Global Search</a><br />
							</p>
						</div>
					</div>
				</div>
				<div class="row bg-even-color">
					<div class="col-xs-12 timeline timeline-success">
						<div class="p-10">
							<p class="text-sm text-muted pull-right">July 17, 2016</p>
							<p>
								<a href="/@rob">User Profiles</a><br />
								Added Username Field<br />
								Language Switcher<br />
								Multilingual Support<br />
								Custom Error Pages<br />
								<a href="/sitemap_index.xml">XML Sitemaps</a><br />
							</p>
						</div>
					</div>
				</div>
				<div class="row bg-odd-color">
					<div class="col-xs-12 timeline timeline-warning">
						<div class="p-10">
							<p class="text-sm text-muted pull-right">July 10, 2016</p>
							<p>
								Authentication<br />
								User Profile Edit<br />
								User Custom Fields<br />
								Admin User CRUD<br />
								Admin Brand CRUD<br />
							</p>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="col-md-6">

			<h3 class="display-5 m-t-20">Backlog</h2>
			<ul>
				<li>000 Add Translations to all hard coded text</li>
				<li>001 Add Multi Lingual Sitemaps</li>
				<li>002 HTML Sitemap: /sitemap</li>
				<li>003 Extend Social Share (Laravel-Social-Share) with oAuth</li>
				<li>004 Buildout /get-social</li>
				<li>005 Admin CRUD (Forum)</li>
				<li>005 Admin CRUD (Glossary)</li>
				<li>007 Email Management</li>
			</ul>


			<h3 class="display-5 m-t-20">Requested Features</h2>



		</div>
	</div>


@endsection

@section('after-scripts-end')
@stop
