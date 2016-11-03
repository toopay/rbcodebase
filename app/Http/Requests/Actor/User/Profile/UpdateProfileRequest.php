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
		return [
			'name_first' => 'required|max:255',
			'name_last' => 'required|max:255',
			'name_slug' => 'required|min:3|max:20|unique:users',
			'email' => 'sometimes|required|email',
			//'password'   => 'required|min:6|confirmed',
		];
	}

}
