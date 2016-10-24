<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;

class MigrateReinstall extends Command
{

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $signature = 'migrate:reinstall';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Re-install database schema and re-seed.';

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire()
	{
		// Proxy to main migrating
		$this->line('Re-install application database...');

		// Proxy to refresh migration
		$this->call('migrate:refresh', []);

		// Seed the data
		$this->call('db:seed', []);
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [];
	}
}
