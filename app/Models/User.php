<?php namespace App;

use Mpociot\Teamwork\Traits\UserHasTeams;

class User extends Model {

	use UserHasTeams; // Add this trait to your model
}
