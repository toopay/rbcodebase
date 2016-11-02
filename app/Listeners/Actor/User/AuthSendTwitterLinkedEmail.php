<?php

namespace App\Listeners\Actor\User;

use Mail;
use App\Events\Actor\User\AuthTwitterAccountWasLinked;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\Actor\User\AuthTwitterAccountLinked;

class AuthSendTwitterLinkedEmail
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
	 * @param  AuthTwitterAccountWasLinked  $event
	 * @return void
	 */
	public function handle(AuthTwitterAccountWasLinked $event)
	{
		Mail::to($event->user)->send(new AuthTwitterAccountWasLinked($event->user));
	}
}
