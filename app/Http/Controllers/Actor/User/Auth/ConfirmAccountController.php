<?php

namespace App\Http\Controllers\Actor\User\Auth;

use App\Models\Actor\User\User;
use App\Http\Controllers\Controller;
use App\Repositories\Actor\User\UserRepository;
use App\Notifications\Actor\User\UserNeedsConfirmation;

/**
 * Class ConfirmAccountController
 * @package App\Http\Controllers\Actor\User
 */
class ConfirmAccountController extends Controller
{
	/**
	 * @var UserRepository
	 */
	protected $user;

	/**
	 * ConfirmAccountController constructor.
	 * @param UserRepository $user
	 */
	public function __construct(UserRepository $user)
	{
		$this->user = $user;
	}

	/**
	 * @param $token
	 * @return mixed
	 */
	public function confirm($token)
	{
		$this->user->confirmAccount($token);
		return redirect()->route('actor.user.auth.login')->withFlashSuccess(trans('exceptions.actor.user.auth.confirmation.success'));
	}

	/**
	 * @param $user
	 * @return mixed
	 */
	public function sendConfirmationEmail(User $user)
	{
		$user->notify(new UserNeedsConfirmation($user->confirmation_code));
		return redirect()->route('actor.user.auth.login')->withFlashSuccess(trans('exceptions.actor.user.auth.confirmation.resent'));
	}
}
