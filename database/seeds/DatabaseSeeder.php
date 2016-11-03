<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class DatabaseSeeder
 */
class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// Actors
		$this->command->info('SEEDER GROUP: Actors');
		$this->call(ActorTableSeeder::class);

		// Common
		$this->command->info('SEEDER GROUP: Common');
		$this->call(HistoryTypeTableSeeder::class);

		// App Group
		//$this->command->info('SEEDER GROUP: Apps');
		//$this->call(AppTableSeeder::class);

		// Completed
		$this->command->info('ALL DONE!');

		Model::reguard();

	}
}
