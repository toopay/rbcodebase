<?php

namespace App\Http\Controllers\Actor\User\Auth;

use App\Http\Controllers\Controller;
use App\Events\Actor\User\UserRegistered;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\Actor\User\RegisterRequest;
use App\Repositories\Actor\User\UserRepository;

/**
 * Class RegisterController
 * @package App\Http\Controllers\Actor\User
 */
class RegisterController extends Controller
{
	use RegistersUsers;

	/**
	 * @var UserRepository
	 */
	protected $user;

	/**
	 * RegisterController constructor.
	 * @param UserRepository $user
	 */
	public function __construct(UserRepository $user)
	{
		// Where to redirect users after registering
		$this->redirectTo = route('app.index');

		$this->user = $user;
	}

	/**
	 * Show the application registration form.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showRegistrationForm()
	{
		return view('actor.user.auth.register');
	}

	/**
	 * @param RegisterRequest $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function register(RegisterRequest $request)
	{
		if (config('actor.users.confirm_email')) {
			$user = $this->user->create($request->all());

			// Add User Types
			if (isset($data['types'])) {
				$user->updateTypes($data['types']);
			}

			// Trigger Event
			event(new UserRegistered($user));
			return redirect($this->redirectPath())->withFlashSuccess(trans('exceptions.app.auth.confirmation.created_confirm')); // @TODO: FIND
		} else {
			auth()->login($this->user->create($request->all()));

			// Add User Types
			if (isset($data['types'])) {
				$user->updateTypes($data['types']);
			}

			// Trigger Event
			event(new UserRegistered(access()->user()));
			return redirect($this->redirectPath());
		}
	}

}
