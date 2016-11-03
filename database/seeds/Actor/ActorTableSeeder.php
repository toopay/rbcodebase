<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorTableSeeder extends Seeder
{
	public function run()
	{
		if (env('DB_CONNECTION') == 'mysql') {
			DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		}

		/*
		 * Users
		 */

			// Users
			$this->command->info('Seed Default Users');
			$this->call(UserTableSeeder::class);

			// Custom Types & Fields
			$this->command->info('User Fields');
			$this->call(UserFieldSeeder::class);

			// Roles
			$this->command->info('Seed Default User Roles');
			$this->call(RoleTableSeeder::class);

			// User Roles
			$this->command->info('Link Users to Roles');
			$this->call(UserRoleSeeder::class);

			// Permissions
			$this->command->info('Seed Default Permissions');
			$this->call(PermissionTableSeeder::class);

			// Role Permission
			$this->command->info('Role Permission');
			$this->call(PermissionRoleSeeder::class);


		/*
		 * Brands
		 */


		if (env('DB_CONNECTION') == 'mysql') {
			DB::statement('SET FOREIGN_KEY_CHECKS=1;');
		}
	}
}
