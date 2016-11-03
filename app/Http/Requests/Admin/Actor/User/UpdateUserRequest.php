<?php

namespace App\Http\Requests\Admin\Actor\User;

use App\Http\Requests\Request;

/**
 * Class UpdateUserRequest
 * @package App\Http\Requests\Admin\Actor\User
 */
class UpdateUserRequest extends Request
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return access()->allow('manage-users');
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name_first' => 'required|max:255',
			'name_last' => 'required|max:255',
			'name_slug' => 'required|min:3|max:20|unique:users',
			'email' => 'required|email',
		];
	}
}
