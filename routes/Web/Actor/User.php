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
			Route::patch('update', 'ProfileController@update')->name('profile.update'); // actor.user.profile.update
			Route::patch('meta/update', 'ProfileController@updateMeta')->name('actor.user.profile.meta.update');

			// Auth
			Route::group(['namespace' => 'Auth'], function () {
				// Logout
				Route::get('logout', 'LoginController@logout')->name('logout'); // actor.user.auth.logout

				// For when admin is logged in as user from backend
				Route::get('logout-as', 'LoginController@logoutAs')->name('logout-as');

				// Change Password Routes
				Route::patch('password/change', 'ChangePasswordController@changePassword')->name('password.change'); // actor.user.profile.password.change

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
		Route::get('login', 'LoginController@showLoginForm')->name('login'); // actor.user.auth.login
		Route::post('login', 'LoginController@login')->name('login');

		// Socialite Routes
		Route::get('login/{provider}', 'SocialLoginController@login')->name('actor.user.auth.social.login');
		// login/{service}/callback     actor.user.auth.social.callback

		// Registration Routes
		Route::get('register', 'RegisterController@showRegistrationForm')->name('actor.user.auth.register');
		Route::post('register', 'RegisterController@register')->name('actor.user.auth.register');

		// Profile
		//	Route::group(['prefix' => 'profile'], function() {

		// Confirm Account Routes
		Route::get('account/confirm/{token}', 'ConfirmAccountController@confirm')->name('actor.user.auth.confirm');
		Route::get('account/confirm/resend/{user}', 'ConfirmAccountController@sendConfirmationEmail')->name('actor.user.auth.confirm.resend');

		// Password Reset Routes
		Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('actor.user.auth.password.email');
		Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('actor.user.auth.password.email');

		Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('actor.user.auth.password.reset.form');
		Route::post('password/reset', 'ResetPasswordController@reset')->name('actor.user.auth.password.reset');
		//	});
	});

});
