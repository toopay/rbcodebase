<?php

namespace App\Models\Common\History\Traits\Relationship;

use App\Models\Access\User\User;
use App\Models\Common\History\HistoryType;

/**
 * Class HistoryRelationship
 * @package App\Models\Common\History\Traits\Relationship
 */
trait HistoryRelationship
{

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function user() {
		return $this->hasOne(User::class, 'id', 'user_id');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function type() {
		return $this->hasOne(HistoryType::class, 'id', 'type_id');
	}
}