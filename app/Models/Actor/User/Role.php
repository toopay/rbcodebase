<?php

namespace App\Models\Actor\User;

use Illuminate\Database\Eloquent\Model;
use App\Models\Actor\User\Traits\RoleAccess;
use App\Models\Actor\User\Traits\Scope\RoleScope;
use App\Models\Actor\User\Traits\Attribute\RoleAttribute;
use App\Models\Actor\User\Traits\Relationship\RoleRelationship;

/**
 * Class Role
 * @package App\Models\Access\Role
 */
class Role extends Model
{
	use RoleScope,
		RoleAccess,
		RoleAttribute,
		RoleRelationship;

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
	protected $fillable = ['name', 'all', 'sort'];

	/**
	 * @param array $attributes
	 */
	public function __construct(array $attributes = [])
	{
		parent::__construct($attributes);
		$this->table = config('access.roles_table');
	}
}
