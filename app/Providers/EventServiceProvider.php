<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
	/**
	 * The event listener mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
		'App\Events\Actor\User\AuthGitHubAccountWasLinked' => [
			'App\Listeners\Actor\User\AuthSendGitHubLinkedEmail',
		],
		'App\Events\Actor\User\AuthTwitterAccountWasLinked' => [
			'App\Listeners\Actor\User\AuthSendTwitterLinkedEmail',
		],
	];

	/**
	 * Register any events for your application.
	 *
	 * @return void
	 */
	public function boot()
	{
		parent::boot();

		//
	}
}
