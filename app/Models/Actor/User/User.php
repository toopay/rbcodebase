<?php

namespace App\Models\Actor\User;

use Illuminate\Notifications\Notifiable;
use App\Models\Actor\User\Traits\UserAccess;
use App\Models\Actor\User\UserField;
use App\Models\Actor\User\UserMeta;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Actor\User\Traits\Scope\UserScope;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Actor\User\Traits\UserSendPasswordReset;
use App\Models\Actor\User\Traits\Attribute\UserAttribute;
use App\Models\Actor\User\Traits\Relationship\UserRelationship;

/**
 * Class User
 * @package App\Models\Actor\User
 */
class User extends Authenticatable
{
	use UserScope,
		UserAccess,
		Notifiable,
		SoftDeletes,
		UserAttribute,
		UserRelationship,
		UserSendPasswordReset;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name_first', 'name_last', 'name_slug', 'email', 'password', 'status', 'confirmation_code', 'confirmed'];

	/**
	 * The attributes that are not mass assignable.
	 *
	 * @var array
	 */
	//protected $guarded = ['id'];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	 * @var array
	 */
	protected $dates = ['deleted_at'];

	/**
	 * @param array $attributes
	 */
	public function __construct(array $attributes = [])
	{
		parent::__construct($attributes);
		$this->table = config('actor.users_table');
	}


	// @TODO: MOVE BELOW

	/**
	 * Save meta fields
	 *
	 * @param $fields
	 */
	public function saveMeta($fields)
	{
		foreach ($fields as $key => $value) {
			$field = UserMeta::firstOrNew([
				'user_id'  => $this->id,
				'field_id' => $key,
			]);

			$field->value = is_array($value) ? implode(UserField::DELIMITER, $value) : $value;
			$field->save();
		}
	}

	public function updateTypes($types)
	{
		if (is_null($types)) {
			$types = [];
		}

		// TODO: removed saved meta fields of old types
		return $this->types()->sync($types);
	}

	public function getFullNameAttribute()
	{
		return $this->name_last ? sprintf("%s %s", $this->name_first, $this->name_last) : $this->name_first;
	}


}
