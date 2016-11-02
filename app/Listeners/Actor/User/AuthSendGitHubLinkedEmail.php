<?php

namespace App\Listeners\Actor\User;

use Mail;
use App\Events\Actor\User\AuthGitHubAccountWasLinked;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\Actor\User\AuthGitHubAccountLinked;

class AuthSendGitHubLinkedEmail
{
	/**
	 * Create the event listener.
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
	 * @param  AuthGitHubAccountWasLinked  $event
	 * @return void
	 */
	public function handle(AuthGitHubAccountWasLinked $event)
	{
		Mail::to($event->user)->send(new AuthGitHubAccountWasLinked($event->user));
	}
}
