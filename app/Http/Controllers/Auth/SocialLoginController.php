<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use Socialite;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialLoginController extends Controller
{
	public function __construct()
	{
		// Ensure visitor is not authenticated
		$this->middleware(['social', 'guest']);
	}

	public function redirect($service, Request $request)
	{
		return Socialite::driver($service)->redirect();
	}

	public function callback($service, Request $request)
	{
		$serviceUser = Socialite::driver($service)->user();

		// Check if there is an existing user
		$user = $this->getExistingUser($serviceUser, $service);

		// If no user exists, create user
		if (!$user) {
			$user = User::create([
				'name' => $serviceUser->getName(),
				'email' => $serviceUser->getEmail(),
			]);
		}

		// Create social meta
		if ($this->needsToCreateSocial($user, $service)) {
			$user->social()->create([
				'service' => $service,
				'social_id' => $serviceUser->getId(),
				'social_user' => $serviceUser->getNickname(),
				'avatar' => $serviceUser->getAvatar(),
				'token' => $serviceUser->token,
			]);
		}

		// Log in user (false, do not remember)
		Auth::login($user, false);

		// Redirect to intended URL
		return redirect()->intended();
	}

	protected function needsToCreateSocial(User $user, $service)
	{
		return !$user->hasSocialLinked($service);
	}

	protected function getExistingUser($serviceUser, $service)
	{
		return User::where('email', $serviceUser->getEmail())->orWhereHas('social', function ($q) use ($serviceUser, $service) {
			$q->where('social_id', $serviceUser->getId())->where('service', $service);
		})->first();
	}
}
