<?php

namespace App\Listeners\Actor\User;

use App\Events\Actor\User\UserLoggedOut;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

/**
 * Class UserLoggedOutListener
 * @package App\Listeners\Actor\User
 */
class UserLoggedOutListener implements ShouldQueue
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
	 * @param  UserLoggedOut $event
	 * @return void
	 */
	public function handle(UserLoggedOut $event)
	{
		\Log::info('User Logged Out: ' . $event->user->name_first .' '. $event->user->name_last);
	}
}
