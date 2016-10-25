<?php

namespace App\Http\Requests\Actor\User\Profile;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateProfileRequest
 * @package App\Http\Requests\Actor\User
 */
class UpdateProfileRequest extends FormRequest
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
		// If updating, ensure we pass the current user
		if ($this->method() == 'PATCH') {
			return [
				'name_first'            => 'required',
				'name_last'             => 'required',
				'name_slug'             => 'min:3|max:20', // @TODO: Add "|unique:users,'.$user->id,"
				'email'                 => 'sometimes|required|email',
			];
		} else {
			return [
				'name_first'            => 'required',
				'name_last'             => 'required',
				'name_slug'             => 'min:3|max:20|unique:users',
				'email'                 => 'sometimes|required|email',
			];
		}
	}
}
