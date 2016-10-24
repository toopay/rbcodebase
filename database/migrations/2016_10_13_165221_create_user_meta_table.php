<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMetaTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('data_user_types', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('text')->nullable();
			$table->boolean('active')->default(0);
			$table->boolean('visibility')->default(0);
			$table->boolean('show_on_registration')->default(false);
			$table->boolean('show_on_settings')->default(false);
			$table->timestamps();
		});

		Schema::create('data_user_fields', function (Blueprint $table) {
			$table->increments('id');
			$table->tinyInteger('type');
			$table->string('title');
			$table->text('value');
			$table->tinyInteger('visibility');
			$table->integer('order')->default(0);
			$table->timestamps();
		});

		Schema::create('user_meta', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('field_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->text('value');
			$table->timestamps();
		});

		Schema::create('user_field_type', function (Blueprint $table) {
			$table->integer('field_id')->unsigned();
			$table->integer('type_id')->unsigned();

			$table->primary(['field_id', 'type_id']);
		});

		Schema::create('user_type_mux', function (Blueprint $table) {
			$table->integer('user_id')->unsigned();
			$table->integer('type_id')->unsigned();

			$table->primary(['user_id', 'type_id']);
		});



	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_type_mux');
		Schema::drop('user_field_type');
		Schema::drop('user_meta');
		Schema::drop('data_user_fields');
		Schema::drop('data_user_types');
	}
}
