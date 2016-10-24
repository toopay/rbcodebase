<?php

namespace App\Models\Actor\User;

use App\Models\Actor\User\User;
use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{
	protected $table = 'user_meta';

	protected $fillable = [
		'user_id', 'field_id', 'value',
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function field()
	{
		return $this->belongsTo(UserField::class, 'field_id');
	}
}
