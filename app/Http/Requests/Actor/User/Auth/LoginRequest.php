<?php

namespace App\Http\Requests\Actor\User\Auth;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class LoginRequest
 * @package App\Http\Requests\Actor\User\Auth
 */
class LoginRequest extends FormRequest
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
			'email'    => 'required|email',
			'password' => 'required',
		];
	}
}
