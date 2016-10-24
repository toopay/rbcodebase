<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\Actor\User\User::class, function (Faker\Generator $faker) {

	static $password;

	return [
		'name_first' => $faker->first_name,
		'name_last' => $faker->last_name,
		'name_slug' => $faker->user_name,
		'email' => $faker->unique()->safeEmail,
		'verified_email' => true,
		'password' => $password ?: $password = bcrypt(str_random(10)),
		'remember_token' => str_random(10),
	];
});
