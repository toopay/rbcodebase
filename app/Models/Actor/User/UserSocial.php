<?php

namespace App\Models\Actor\User;

use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
	protected $table = 'users_socials';

	protected $fillable = ['service', 'social_id', 'social_user', 'token', 'avatar'];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
