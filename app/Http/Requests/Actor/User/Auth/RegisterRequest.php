<?php

namespace App\Http\Requests\Actor\User\Auth;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class RegisterRequest
 * @package App\Http\Requests\App\Access
 */
class RegisterRequest extends FormRequest
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
			'name_first' => 'required|max:255',
			'name_last'  => 'required|max:255',
			'name_slug'  => 'required|max:255|unique:users',
			'email'      => 'required|email|max:255|unique:users',
			'password'   => 'required|min:6|confirmed',
		];
	}
}
