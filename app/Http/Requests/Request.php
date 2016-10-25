<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class Request
 * @package App\Http\Requests
 */
abstract class Request extends FormRequest
{
	/**
	 * Sends JSON response, if API request validation fails
	 *
	 * @param array $errors
	 * @return \Response|\Symfony\Component\HttpFoundation\Response
	 */
	public function response(array $errors)
	{
		if ($this->is('api/*')) {
			return error(422, 'Bad request.', 422, array_flatten($errors));
		}

		return parent::response($errors);
	}
}
