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

		// Get User Type
		$userType = UserType::where('title', 'User')->first();

		if (!$userType) {
			$userType = UserType::create([
				'title'                => 'User',
				'text'                 => 'User',
				'active'               => true,
				'visibility'           => true,
				'show_on_registration' => true,
				'show_on_settings'     => true,
			]);
		}

		$userType->user_fields()->create([
			'type'       => UserField::TEXT_BOX,
			'title'      => 'Location',
			'visibility' => UserField::VISIBILITY_PUBLIC,
		]);
	}
}
