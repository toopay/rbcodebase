<?php

namespace App\Models\Actor\User\Social\Traits\Relationship;

use App\Models\Actor\User\UserSocial;
use App\Models\Actor\User\UserMeta;
use App\Models\Actor\User\UserType;

/**
 * Class UserRelationship
 * @package App\Models\Actor\User\Social\Traits\Relationship
 */
trait UserSocialRelationship
{

	/**
	 * User has many social logins
	 *
	 * @return mixed
	 */
	public function social()
	{
		return $this->hasMany(UserSocial::class);
	}

	public function hasSocialLinked($service)
	{
		return (bool) $this->social->where('service', $service)->count();
	}

}
