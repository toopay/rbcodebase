<?php

namespace App\Listeners\Actor\User;

use App\Events\Actor\User\UserLoggedIn;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

/**
 * Class UserLoggedInListener
 * @package App\Listeners\Actor\User
 */
class UserLoggedInListener implements ShouldQueue
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
	 * @param  UserLoggedIn $event
	 * @return void
	 */
	public function handle(UserLoggedIn $event)
	{
		\Log::info('User Logged In: ' . $event->user->name_first .' '. $event->user->name_last);
	}
}
