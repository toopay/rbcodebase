<?php

namespace App\Http\Controllers\Actor\User\Auth;

use App\Models\Actor\User\User;
use App\Http\Controllers\Controller;

use App\Events\Actor\User\UserRegistered;
use App\Repositories\Actor\User\UserRepositoryContract;

use Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Register Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users as well as their
	| validation and creation. By default this controller uses a trait to
	| provide this functionality without requiring any additional code.
	|
	*/

	use RegistersUsers;

	/**
	 * Where to redirect users after login / registration.
	 *
	 * @var string
	 */
	protected $redirectTo = route('app.index');

	/**
	 * @var UserRepositoryContract
	 */
	private $userRepository;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(UserRepositoryContract $userRepository)
	{
		$this->userRepository = $userRepository;

		$this->middleware('guest');
	}

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data)
	{
		return Validator::make($data, [
			'name_first' => 'required|max:255',
			'name_last'  => 'required|max:255',
			'name_slug'  => 'required|max:255|unique:users',
			'email'      => 'required|email|max:255|unique:users',
			'password'   => 'required|min:6|confirmed',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	protected function create(array $data)
	{
		$user = $this->userRepository->create($data);

		if (isset($data['types'])) {
			$user->updateTypes($data['types']);
		}

		event(new UserRegistered($user));

		if (config('access.users.confirm_email')) {
			return redirect()->route('app.index')->withFlashSuccess(trans('exceptions.app.auth.confirmation.created_confirm'));
		}

		auth()->login($user);

		return redirect($this->redirectPath());
	}
}
