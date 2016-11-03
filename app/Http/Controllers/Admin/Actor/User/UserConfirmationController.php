<?php

namespace App\Http\Controllers\Admin\Actor\User;

use App\Models\Actor\User\User;
use App\Http\Controllers\Controller;
use App\Notifications\Actor\User\UserNeedsConfirmation;
use App\Http\Requests\Admin\Actor\User\ManageUserRequest;

/**
 * Class UserConfirmationController
 */
class UserConfirmationController extends Controller
{

	/**
	 * @param User $user
	 * @param ManageUserRequest $request
	 * @return mixed
	 */
	public function sendConfirmationEmail(User $user, ManageUserRequest $request)
	{
		$user->notify(new UserNeedsConfirmation($user->confirmation_code));
		return redirect()->back()->withFlashSuccess(trans('alerts.backend.users.confirmation_email'));
	}
}
