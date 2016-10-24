<div class="card">
	<div class="card-header">
		Settings
	</div>
	<div class="list-group list-group-root well">
		<a href="{!! route('actor.user.profile.edit') !!}" class="list-group-item {{ checkActiveRoute(route('actor.user.profile.edit', false), true) }}"><i class="fa fa-pencil fa-btn fa-fw"></i> {{ trans('labels.app.user.profile.edit_information') }}</a>
		@if ($user->canChangePassword())
		<a href="{!! route('actor.user.profile.password.change') !!}" class="list-group-item {{ checkActiveRoute(route('actor.user.profile.password.change', false), true) }}"><i class="fa fa-lock fa-btn fa-fw"></i> {{ trans('navs.app.user.change_password') }}</a>
		@endif
		<a href="{!! route('actor.user.connect') !!}" class="list-group-item {{ checkActiveRoute(route('actor.user.connect', false), true) }}"><i class="fa fa-cube fa-btn fa-fw"></i> Social Logins</a>
		<a href="{!! route('actor.user.profile.media') !!}" class="list-group-item {{ checkActiveRoute(route('actor.user.profile.media', false), true) }}"><i class="fa fa-paint-brush fa-btn fa-fw"></i> Media &amp; Styles</a>
	</div>
</div>

<div class="card">
	<div class="card-header">
		Billing
	</div>
	<div class="list-group list-group-root well">
		<a href="{!! route('actor.user.wallet.index') !!}" class="list-group-item {{ checkActiveRoute(route('actor.user.wallet.index', false), true) }}"><i class="fa fa-credit-card fa-btn fa-fw"></i> Payment Methods</a>
		<a href="{!! route('actor.user.wallet.history') !!}" class="list-group-item {{ checkActiveRoute(route('actor.user.wallet.history', false), true) }}"><i class="fa fa-history fa-btn fa-fw"></i> Invoices</a>
	</div>
</div>
