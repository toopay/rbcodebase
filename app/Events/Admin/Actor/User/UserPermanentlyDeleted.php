<?php

namespace App\Events\Admin\Access\User;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;

/**
 * Class UserPermanentlyDeleted
 * @package App\Events\Admin\Access\User
 */
class UserPermanentlyDeleted extends Event
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