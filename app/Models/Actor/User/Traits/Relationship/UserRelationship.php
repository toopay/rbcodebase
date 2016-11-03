<?php

namespace App\Models\Actor\User\Traits\Relationship;

use App\Models\Actor\User\SocialLogin;

/**
 * Class UserRelationship
 * @package App\Models\Actor\User\Traits\Relationship
 */
trait UserRelationship
{

	/**
	 * Many-to-Many relations with Role.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function roles()
	{
		return $this->belongsToMany(config('actor.role'), config('actor.assigned_roles_table'), 'user_id', 'role_id');
	}

	/**
	 * @return mixed
	 */
	public function providers()
	{
		return $this->hasMany(SocialLogin::class);
	}
}
