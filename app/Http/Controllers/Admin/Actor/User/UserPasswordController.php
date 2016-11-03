<?php

namespace App\Http\Controllers\Admin\Actor\User;

use App\Models\Actor\User\User;
use App\Http\Controllers\Controller;
use App\Repositories\Admin\Actor\User\UserRepository;
use App\Http\Requests\Admin\Actor\User\ManageUserRequest;
use App\Http\Requests\Admin\Actor\User\UpdateUserPasswordRequest;

/**
 * Class UserPasswordController
 */
class UserPasswordController extends Controller
{
	/**
	 * @var UserRepository
	 */
	protected $users;

	/**
	 * @param UserRepository $users
	 */
	public function __construct(UserRepository $users)
	{
		$this->users = $users;
	}

	/**
	 * @param User $user
	 * @param ManageUserRequest $request
	 * @return mixed
	 */
	public function edit(User $user, ManageUserRequest $request)
	{
		return view('backend.access.change-password')
			->withUser($user);
	}

	/**
	 * @param User $user
	 * @param UpdateUserPasswordRequest $request
	 * @return mixed
	 */
	public function update(User $user, UpdateUserPasswordRequest $request)
	{
		$this->users->updatePassword($user, $request->all());
		return redirect()->route('admin.access.user.index')->withFlashSuccess(trans('alerts.backend.users.updated_password'));
	}
}
