<?php

namespace App\Models\Actor\User;

use App\Models\Actor\User\User;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
	protected $table = 'data_user_types';

	protected $fillable = [
		'title', 'text', 'active', 'visibility', 'show_on_registration', 'show_on_settings',
	];

	protected $casts = [
		'visibility' => 'bool',
	];

	public function user_fields()
	{
		return $this->belongsToMany(UserField::class, 'user_field_type', 'type_id', 'field_id');
	}

	public function users()
	{
		return $this->belongsToMany(User::class, 'user_type_mux', 'type_id', 'user_id');
	}

	public function scopeActive($query)
	{
		return $query->whereActive(true);
	}

	public function scopeInActive($query)
	{
		return $query->whereActive(false);
	}

	public function scopeVisible($query)
	{
		return $query->whereVisibility(true);
	}

	public function scopeInvisible($query)
	{
		return $query->whereVisibility(false);
	}

	public function scopeShowOnRegistration($query)
	{
		return $query->whereShowOnRegistration(true);
	}

	public function scopeShowOnSettings($query)
	{
		return $query->whereShowOnSettings(true);
	}
}
