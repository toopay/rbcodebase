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

			// Roles
			//$this->command->info('Seed Default User Roles');
			//$this->call(RoleTableSeeder::class);

			// User Roles
			//$this->command->info('Link Users to Roles');
			//$this->call(UserRoleSeeder::class);

			// Permission Groups
			//$this->command->info('Seed Default Permission Groups');
			//$this->call(PermissionGroupTableSeeder::class);

			// Permissions
			//$this->command->info('Seed Default Permissions');
			//$this->call(PermissionTableSeeder::class);

			// Permission Dependencies
			//$this->command->info('Seed Default Permission Dependencies');
			//$this->call(PermissionDependencyTableSeeder::class);

			// Role Permission
			//$this->command->info('Role Permission');
			//$this->call(RolePermissionTableSeeder::class);

			// Custom Types & Fields
			$this->command->info('User Fields');
			$this->call(UserFieldSeeder::class);


		/*
		 * Brands
		 */


		if (env('DB_CONNECTION') == 'mysql') {
			DB::statement('SET FOREIGN_KEY_CHECKS=1;');
		}
	}
}
