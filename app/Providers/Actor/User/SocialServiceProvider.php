<?php

namespace App\Providers\Actor\User;

use App\Models\Actor\User\UserSocial;
use Illuminate\Support\ServiceProvider;

class SocialServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		UserSocial::observe(\App\Observers\Actor\User\UserSocialObserver::class);
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
}
