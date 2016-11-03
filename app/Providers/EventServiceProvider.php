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
	 protected $listen = [];

	 /**
	  * Class event subscribers
	  * @var array
	  */
	 protected $subscribe = [
		 /**
		  * Frontend Subscribers
		  */

		 /**
		  * Auth Subscribers
		  */
		 \App\Listeners\Actor\User\UserEventListener::class,

		 /**
		  * Backend Subscribers
		  */

		 /**
		  * Access Subscribers
		  */
		 \App\Listeners\Backend\Actor\User\UserEventListener::class,
		 \App\Listeners\Admin\Actor\User\RoleEventListener::class,
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
