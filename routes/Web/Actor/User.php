<?php

/**
 * App Access Controllers
 */
Route::group(['namespace' => 'User'], function () {

	/**
	 * Public Profile
	 */
	Route::group(['middleware' => 'web'], function () {

		// Profiles
		Route::get('@{username}', 'ProfileController@show')->name('actor.user.profile.show');
	});


	/**
	 * Logged In
	 */
	Route::group(['middleware' => 'auth'], function () {

		// Profile
		Route::group(['prefix' => 'profile'], function () {
			// Management
			Route::get('/', 'ProfileController@index')->name('actor.user.profile');
			Route::get('edit', 'ProfileController@edit')->name('actor.user.profile.edit');
			Route::patch('update', 'ProfileController@update')->name('actor.user.profile.update');
			Route::patch('meta/update', 'ProfileController@updateMeta')->name('actor.user.profile.meta.update');

			// Auth
			Route::group(['middleware' => 'auth', 'namespace' => 'Auth'], function () {
				// Logout
				Route::get('logout', 'LoginController@logout')->name('actor.user.auth.logout');

				// Change Password Routes
				Route::get('password', 'PasswordController@showChangePasswordForm')->name('actor.user.profile.password.change');
				Route::post('password', 'PasswordController@changePassword')->name('actor.user.profile.password.update');
			});

			// Media
			Route::group(['prefix' => 'media'], function () {
				Route::get('/', 'MediaController@index')->name('actor.user.profile.media');
			});

			// SSO  @TODO: Refactor
			Route::get("connect", function(){
				return view('actor.user.connect.index')->with('user', access()->user() );
			})->name('actor.user.connect');

			// Wallet
			Route::group(['prefix' => 'wallet'], function () {
				Route::get('/', 'WalletController@index')->name('actor.user.wallet.index');
				Route::get('/history', 'WalletController@history')->name('actor.user.wallet.history');
			});

		});

	});


	/**
	 * NOT Logged In
	 */
	Route::group(['middleware' => 'guest', 'namespace' => 'Auth'], function () {

		// Authentication Routes
		Route::get('login', 'LoginController@showLoginForm')->name('actor.user.auth.login');
		Route::post('login', 'LoginController@login');

		// Socialite Routes
		Route::get('login/{service}', 'SocialLoginController@redirect')->name('actor.user.auth.provider');
		Route::get('login/{service}/callback', 'SocialLoginController@callback')->name('actor.user.auth.provider.callback');

		// Registration Routes
		Route::get('register', 'LoginController@showRegistrationForm')->name('actor.user.auth.register');
		Route::post('register', 'LoginController@register');

		// Profile
//		Route::group(['prefix' => 'profile'], function() {

			// Confirm Account Routes
	//		Route::get('account/confirm/{token}', 'LoginController@confirmAccount')->name('actor.user.auth.confirm');
	//		Route::get('account/confirm/resend/{user_id}', 'LoginController@resendConfirmationEmail')->name('actor.user.auth.confirm.resend');

			// Password Reset Routes
	//		Route::get('password/reset/{token?}', 'PasswordController@showResetForm')->name('actor.user.auth.password.reset');
	//		Route::post('password/email', 'PasswordController@sendResetLinkEmail');
	//		Route::post('password/reset', 'PasswordController@reset');
	});

//	});
});
