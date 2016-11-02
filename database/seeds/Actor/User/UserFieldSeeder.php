<?php

use Illuminate\Database\Seeder;
use App\Models\Actor\User\UserType;
use App\Models\Actor\User\UserField;
use Illuminate\Support\Facades\DB;

class UserFieldSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Clean
		DB::table('data_user_types')->delete();
		DB::table('data_user_fields')->delete();

		// Add Default Users
		$seed =
		[ // title, text, active, visibility, show_on_registration, show_on_settings
			['User', 'Default User Type', true, true, true, true],
			['Super User', 'Super User Type', true, true, true, true],
			['Administrator', 'Administrator', true, false, false, false],
		];

		foreach ($seed as $key => $value) {
			// Get Values from Array
			$title = $value[0];
			$text = $value[1];
			$active = $value[2];
			$visibility = $value[3];
			$show_on_registration = $value[4];
			$show_on_settings = $value[5];

			// Create Record
			$record = UserType::create(['title' => $title, 'text' => $text, 'active' => $active, 'visibility' => $visibility, 'show_on_registration' => $show_on_registration, 'show_on_settings' => $show_on_settings]);
			echo 'Added Type: '. $title . PHP_EOL;

			// Add Fields
			$record->user_fields()->create(['type' => UserField::TEXT_BOX, 'title' => 'Sub ('. $title .')', 'value' => '1', 'visibility' => UserField::VISIBILITY_PUBLIC,]);

		}
	}
}
