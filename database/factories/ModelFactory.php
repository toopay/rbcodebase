<?php

use Faker\Generator;
use App\Models\Actor\User\User;

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

$factory->define(User::class, function (Generator $faker) {

	static $password;

	return [
		'name_first' => $faker->name_first,
		'name_last' => $faker->name_last,
		'name_slug' => $faker->user_name,
		'email' => $faker->unique()->safeEmail,
		'password' => $password ?: $password = bcrypt(str_random(10)),
		'remember_token' => str_random(10),
	];
});
