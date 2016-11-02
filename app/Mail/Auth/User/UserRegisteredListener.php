<?php

namespace App\Listeners\Actor\User;

use App\Events\Actor\User\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

/**
 * Class UserRegisteredListener
 * @package App\Listeners\Actor\User
 */
class UserRegisteredListener implements ShouldQueue
{
	use InteractsWithQueue;

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  UserRegistered $event
	 * @return void
	 */
	public function handle(UserRegistered $event)
	{
		\Log::info('User Registered: ' . $event->user->name_first .' '. $event->user->name_last);
	}
}
