<?php

namespace App\Models\Actor\User\Traits\Scope;

/**
 * Class RoleScope
 * @package App\Models\Actor\User\Traits\Scope
 */
trait RoleScope
{

	/**
	 * @param $query
	 * @param string $direction
	 * @return mixed
	 */
	public function scopeSort($query, $direction = "asc") {
		return $query->orderBy('sort', $direction);
	}
}
