<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Actor\User\User;

/**
 * Class UserTableSeeder
 */
class UserTableSeeder extends Seeder
{
	public function run()
	{
		// Reset Data
		DB::table(config('actor.users_table'))->delete();

		// Add Default Users
		$seed =
		[ // name_first, name_last, name_slug, email, password
			['Rob', 'Bertholf', 'rob', 'rob@bertholf.com', bcrypt('asdfasdf')],
			['Tester', 'Lester', 'tester', 'rob1@bertholf.com', bcrypt('asdfasdf')],
		];

		foreach ($seed as $key => $value) {
			// Get Values from Array
			$name_first = $value[0];
			$name_last = $value[1];
			$name_slug = $value[2];
			$email = $value[3];
			$password = $value[4];

			// Create Record
			$record = User::create(['name_first' => $name_first, 'name_last' => $name_last, 'name_slug' => $name_slug, 'email' => $email, 'password' => $password, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
			echo 'Added User: '. $record->$name_first .' '. $record->$name_last . PHP_EOL;

		}

	}
}
