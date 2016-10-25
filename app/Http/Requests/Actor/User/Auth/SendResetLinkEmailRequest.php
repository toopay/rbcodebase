<?php

namespace App\Http\Requests\Actor\User\Auth;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class SendResetLinkEmailRequest
 * @package App\Http\Requests\App\Access
 */
class SendResetLinkEmailRequest extends FormRequest
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
			'email' => 'required|email',
		];
	}
}
