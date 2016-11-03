<?php

namespace App\Http\Requests\Admin\Actor\User;

use App\Http\Requests\Request;
use Illuminate\Validation\Rule;

/**
 * Class StoreUserRequest
 * @package App\Http\Requests\Backend\Actor\User
 */
class StoreUserRequest extends Request
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
			'email'    =>  ['required', 'email', 'max:255', Rule::unique('users')],
			'password' => 'required|min:6|confirmed',
		];
	}
}
