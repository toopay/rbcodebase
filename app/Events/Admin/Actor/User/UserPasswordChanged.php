<?php

namespace App\Events\Admin\Actor\User;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;

/**
 * Class UserPasswordChanged
 * @package App\Events\Admin\Actor\User
 */
class UserPasswordChanged extends Event
{
	use SerializesModels;

	/**
	 * @var $user
	 */
	public $user;

	/**
	 * @param $user
	 */
	public function __construct($user)
	{
		$this->user = $user;
	}
}