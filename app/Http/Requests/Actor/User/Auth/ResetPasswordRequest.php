<?php

namespace App\Http\Requests\Actor\User\Auth;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ResetPasswordRequest
 * @package App\Http\Requests\App\Access
 */
class ResetPasswordRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'token' => 'required',
			'email' => 'required|email',
			'password' => 'required|confirmed|min:6',
		];
	}
}
