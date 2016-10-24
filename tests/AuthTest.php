<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthTest extends TestCase
{
	use DatabaseTransactions;

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function a_user_may_register_but_must_confirm_email_address()
	{
		$this->visit('register')
			->type('Tester', 'name_first')
			->type('Lester', 'name_last')
			->type('rob@bertholf.com', 'email')
			->type('asdfasdf', 'password')
			->press('Register');

		$this->see('Please confirm your email address')
			->seeInDatabase('users', ['name', 'John Doe', 'verified_email' => 0]);
	}
}
