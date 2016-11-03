<?php

namespace App\Events\Admin\Actor\User;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;

/**
 * Class RoleCreated
 * @package App\Events\Admin\Actor\User
 */
class RoleCreated extends Event
{
	use SerializesModels;

	/**
	 * @var $role
	 */
	public $role;

	/**
	 * @param $role
	 */
	public function __construct($role)
	{
		$this->role = $role;
	}
}
