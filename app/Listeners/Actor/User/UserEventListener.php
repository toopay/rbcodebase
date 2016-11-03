<?php

namespace App\Listeners\Actor\User;

/**
 * Class UserEventListener
 * @package App\Listeners\Actor\User
 */
class UserEventListener
{

	/**
	 * @param $event
	 */
	public function onLoggedIn($event) {
		\Log::info('User Logged In: ' . $event->user->name);
	}

	/**
	 * @param $event
	 */
	public function onLoggedOut($event) {
		\Log::info('User Logged Out: ' . $event->user->name);
	}

	/**
	 * @param $event
	 */
	public function onRegistered($event) {
		\Log::info('User Registered: ' . $event->user->name);
	}

	/**
	 * @param $event
	 */
	public function onConfirmed($event) {
		\Log::info('User Confirmed: ' . $event->user->name);
	}

	/**
	 * Register the listeners for the subscriber.
	 *
	 * @param  \Illuminate\Events\Dispatcher  $events
	 */
	public function subscribe($events)
	{
		$events->listen(
			\App\Events\Actor\User\UserLoggedIn::class,
			'App\Listeners\Actor\User\UserEventListener@onLoggedIn'
		);

		$events->listen(
			\App\Events\Actor\User\UserLoggedOut::class,
			'App\Listeners\Actor\User\UserEventListener@onLoggedOut'
		);

		$events->listen(
			\App\Events\Actor\User\UserRegistered::class,
			'App\Listeners\Actor\User\UserEventListener@onRegistered'
		);

		$events->listen(
			\App\Events\Actor\User\UserConfirmed::class,
			'App\Listeners\Actor\User\UserEventListener@onConfirmed'
		);
	}
}