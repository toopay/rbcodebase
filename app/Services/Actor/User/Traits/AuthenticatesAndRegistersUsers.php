<?php

namespace App\Services\Actor\User\Traits;

/**
 * Class AuthenticatesAndRegistersUsers
 * @package App\Services\Actor\User\Traits
 */
trait AuthenticatesAndRegistersUsers
{
	use AuthenticatesUsers, RegistersUsers {
		AuthenticatesUsers::redirectPath insteadof RegistersUsers;
	}
}
