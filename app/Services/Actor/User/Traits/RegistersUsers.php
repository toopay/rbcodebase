<?php

namespace App\Services\Actor\User\Traits;

use App\Events\Actor\User\UserRegistered;
use App\Http\Requests\Actor\User\Auth\RegisterRequest;

/**
 * Class RegistersUsers
 * @package App\Services\Actor\User\Traits
 */
trait RegistersUsers
{
//	use RedirectsUsers;

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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
		if (config('access.users.confirm_email')) {
			$user = $this->user->create($request->all());

			if ($request->has('types')) {
				$user->updateTypes($request->types);
			}

			event(new UserRegistered($user));

			return redirect()->route('app.index')->withFlashSuccess(trans('exceptions.app.auth.confirmation.created_confirm'));
		} else {
			$user = $this->user->create($request->all());

			auth()->login($user);

			if ($request->has('types')) {
				$user->updateTypes($request->types);
			}

			event(new UserRegistered($user));

			return redirect($this->redirectPath());
		}
	}
}
