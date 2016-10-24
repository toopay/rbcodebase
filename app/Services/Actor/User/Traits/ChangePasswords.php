<?php

namespace App\Services\Actor\User\Traits;

use App\Http\Requests\Actor\User\ChangePasswordRequest;
use App\Classes\Breadcrumbs;

/**
 * Class ChangePasswords
 * @package App\Services\Actor\User\Traits
 */
trait ChangePasswords
{

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function showChangePasswordForm()
	{
		$user = access()->user();

		// Specify Title
		$titleparent = 'Profile'; // @TODO: Translate
		$title = 'Change Password'; // @TODO: Translate

		// Set Breadcrumbs
		Breadcrumbs::push('<i class="fa fa-home"></i>', route('marketing.index'));
		Breadcrumbs::push($titleparent, route('actor.user.profile'));
		Breadcrumbs::push($title, route('actor.user.profile.password.change'));

		// Return View
		return view('actor.user.profile.passwords.change', compact('title', 'user'));
	}

	/**
	 * @param ChangePasswordRequest $request
	 * @return mixed
	 */
	public function changePassword(ChangePasswordRequest $request)
	{
		$this->user->changePassword($request->all());
		return redirect()->route('actor.user.profile')->withFlashSuccess(trans('strings.app.user.password_updated'));
	}
}
