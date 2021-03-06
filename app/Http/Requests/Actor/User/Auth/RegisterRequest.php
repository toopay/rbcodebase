<?php

namespace App\Http\Requests\Actor\User\Auth;

use App\Http\Requests\Request;
use Illuminate\Validation\Rule;

/**
 * Class RegisterRequest
 * @package App\Http\Requests\Actor\User\Auth
 */
class RegisterRequest extends Request
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
			'name_first' => 'required',
			'name_last' => 'required',
			'name_slug' => 'min:3|max:20|unique:users',
			'email' => ['required', 'email', 'max:255', Rule::unique('users')],
			'password' => 'required|min:6|confirmed',
			'g-recaptcha-response' => 'required_if:captcha_status,true|captcha',
		];
	}

	/**
	 * @return array
	 */
	public function messages() {
		return [
			'g-recaptcha-response.required_if' => trans('validation.required', ['attribute' => 'captcha']),
		];
	}
}
