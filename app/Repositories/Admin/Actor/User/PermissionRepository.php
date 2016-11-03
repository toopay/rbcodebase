<?php

namespace App\Repositories\Admin\Actor\User;

use App\Repositories\Repository;
use App\Models\Actor\User\Permission;

/**
 * Class PermissionRepository
 * @package App\Repositories\Permission
 */
class PermissionRepository extends Repository
{
	/**
	 * Associated Repository Model
	 */
	const MODEL = Permission::class;
}
