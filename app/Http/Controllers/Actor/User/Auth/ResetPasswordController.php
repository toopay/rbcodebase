<?php

namespace App\Http\Controllers\Actor\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Repositories\Actor\User\UserRepository;

/**
 * Class ResetPasswordController
 * @package App\Http\Controllers\Actor\User
 */
class ResetPasswordController extends Controller
{
	use ResetsPasswords;

	/**
	 * @var UserRepository
	 */
	protected $user;

	/**
	 * ChangePasswordController constructor.
	 * @param UserRepository $user
	 */
	public function __construct(UserRepository $user)
	{
		$this->user = $user;
	}

	/**
	 * Where to redirect users after resetting password
	 *
	 * @return string
	 */
	public function redirectPath() {
		return route('marketing.index');
	}

	/**
	 * Display the password reset view for the given token.
	 *
	 * If no token is present, display the link request form.
	 *
	 * @param  string|null  $token
	 * @return \Illuminate\Http\Response
	 */
	public function showResetForm($token = null)
	{
		return view('actor.user.auth.passwordreset')
			->withToken($token)
			->withEmail($this->user->getEmailForPasswordToken($token));
	}
}
