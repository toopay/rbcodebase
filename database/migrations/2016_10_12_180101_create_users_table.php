<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name_first');
			$table->string('name_last');
			$table->string('name_slug')->unique();
			$table->string('email')->unique();
			$table->string('email_token')->nullable();
			$table->string('password')->nullable();
			$table->boolean('verified_email')->default(false);
			$table->boolean('verified_human')->default(false);
			$table->string('language')->nullable();
			$table->string('timezone')->default('UTC');
			$table->rememberToken();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}
}
