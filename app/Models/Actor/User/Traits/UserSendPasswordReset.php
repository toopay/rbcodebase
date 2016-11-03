<?php

namespace App\Models\Actor\User\Traits;

use App\Notifications\Actor\User\UserNeedsPasswordReset;

/**
 * Class UserSendPasswordReset
 * @package App\Models\Actor\User\Traits
 */
trait UserSendPasswordReset
{
	/**
	 * Send the password reset notification.
	 *
	 * @param  string  $token
	 * @return void
	 */
	public function sendPasswordResetNotification($token)
	{
		$this->notify(new UserNeedsPasswordReset($token));
	}
}
