<?php

namespace App\Http\Controllers\Actor\User\Auth;

use App\Http\Controllers\Controller;
use App\Services\Actor\User\Traits\RegistersUsers;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Services\Actor\User\Traits\AuthenticatesAndRegistersUsers;
/*
use App\Repositories\Actor\User\UserRepositoryContract;
use App\Services\Actor\User\Traits\ConfirmUsers;
*/
use App\Services\Actor\User\Traits\UseSocialite;

class LoginController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles authenticating users for the application and
	| redirecting them to your home screen. The controller uses a trait
	| to conveniently provide its functionality to your applications.
	|
	*/

	use AuthenticatesAndRegistersUsers, RegistersUsers, UseSocialite, ThrottlesLogins;
	//use AuthenticatesAndRegistersUsers, ConfirmUsers, , UseSocialite;

	/**
	 * Override Username
	 *
	 * @var string
	 */
	protected $username = 'email';

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $redirectTo = '/';

	/**
	 * Where to redirect users after they logout
	 *
	 * @var string
	 */
	protected $redirectAfterLogout = '/';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest', ['except' => 'logout']);
	}
}
