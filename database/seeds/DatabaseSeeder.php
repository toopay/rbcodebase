<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Actors
		$this->command->info('SEEDER GROUP: Actors');
		$this->call(ActorTableSeeder::class);

		// Common
		//$this->command->info('SEEDER GROUP: Common');

		// App Group
		//$this->command->info('SEEDER GROUP: Apps');
		//$this->call(AppTableSeeder::class);

		// Completed
		$this->command->info('ALL DONE!');
	}
}
