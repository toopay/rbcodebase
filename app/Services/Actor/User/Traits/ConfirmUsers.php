<?php

namespace App\Services\Actor\User\Traits;

/**
 * Class ConfirmUsers
 * @package App\Services\Actor\User\Traits
 */
trait ConfirmUsers
{

	/**
	 * Confirms the users account by their token
	 *
	 * @param $token
	 * @return mixed
	 */
	public function confirmAccount($token)
	{
		$this->user->confirmAccount($token);
		return redirect()->route('actor.user.auth.login')->withFlashSuccess(trans('exceptions.app.auth.confirmation.success'));
	}

	/**
	 * @param $user_id
	 * @return mixed
	 */
	public function resendConfirmationEmail($user_id)
	{
		$this->user->resendConfirmationEmail($user_id);
		return redirect()->route('actor.user.auth.login')->withFlashSuccess(trans('exceptions.app.auth.confirmation.resent'));
	}
}
