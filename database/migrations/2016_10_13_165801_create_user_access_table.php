<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class SetupAccessTables
 */
class CreateUserAccessTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table(config('actor.users_table'), function ($table) {
			$table->tinyInteger('status')->after('password')->default(1)->unsigned();
		});

		Schema::create(config('actor.roles_table'), function ($table) {
			$table->increments('id')->unsigned();
			$table->string('name');
			$table->boolean('all')->default(false);
			$table->smallInteger('sort')->default(0)->unsigned();
			$table->timestamps();

			/**
			 * Add Foreign/Unique/Index
			 */
			$table->unique('name');
		});

		Schema::create(config('actor.assigned_roles_table'), function ($table) {
			$table->increments('id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('role_id')->unsigned();

			/**
			 * Add Foreign/Unique/Index
			 */
			$table->foreign('user_id')
				->references('id')
				->on(config('actor.users_table'))
				->onDelete('cascade');

			$table->foreign('role_id')
				->references('id')
				->on(config('actor.roles_table'))
				->onDelete('cascade');
		});

		Schema::create(config('actor.permissions_table'), function ($table) {
			$table->increments('id')->unsigned();
			$table->string('name');
			$table->string('display_name');
			$table->smallInteger('sort')->default(0)->unsigned();
			$table->timestamps();

			/**
			 * Add Foreign/Unique/Index
			 */
			$table->unique('name');
		});

		Schema::create(config('actor.permission_role_table'), function ($table) {
			$table->increments('id')->unsigned();
			$table->integer('permission_id')->unsigned();
			$table->integer('role_id')->unsigned();

			/**
			 * Add Foreign/Unique/Index
			 */
			$table->foreign('permission_id')
				->references('id')
				->on(config('actor.permissions_table'))
				->onDelete('cascade');

			$table->foreign('role_id')
				->references('id')
				->on(config('actor.roles_table'))
				->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table(config('actor.users_table'), function (Blueprint $table) {
			$table->dropColumn('status');
		});

		/**
		 * Remove Foreign/Unique/Index
		 */
		Schema::table(config('actor.roles_table'), function (Blueprint $table) {
			$table->dropUnique(config('actor.roles_table') . '_name_unique');
		});

		Schema::table(config('actor.assigned_roles_table'), function (Blueprint $table) {
			$table->dropForeign(config('actor.assigned_roles_table') . '_user_id_foreign');
			$table->dropForeign(config('actor.assigned_roles_table') . '_role_id_foreign');
		});

		Schema::table(config('actor.permissions_table'), function (Blueprint $table) {
			$table->dropUnique(config('actor.permissions_table') . '_name_unique');
		});

		Schema::table(config('actor.permission_role_table'), function (Blueprint $table) {
			$table->dropForeign(config('actor.permission_role_table') . '_permission_id_foreign');
			$table->dropForeign(config('actor.permission_role_table') . '_role_id_foreign');
		});

		/**
		 * Drop tables
		 */
		Schema::dropIfExists(config('actor.assigned_roles_table'));
		Schema::dropIfExists(config('actor.permission_role_table'));
		Schema::dropIfExists(config('actor.roles_table'));
		Schema::dropIfExists(config('actor.permissions_table'));
	}
}
