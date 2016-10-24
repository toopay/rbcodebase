<?php

namespace App\Models\Actor\User;

use Illuminate\Support\ServiceProvider;
use Form;
use Illuminate\Database\Eloquent\Model;

class UserField extends Model
{
	protected $table = 'data_user_fields';

	protected $fillable = [
		'type', 'title', 'value', 'visibility', 'order',
	];

	/**
	 * Specify delimiter for multi value controls
	 */
	const DELIMITER = "|";

	/**
	 * Control types
	 */
	const TEXT_BOX = 1, TEXT_AREA = 2, DROP_DOWN = 3, DROP_DOWN_MULTI = 4;

	/**
	 * Visibility
	 */
	const VISIBILITY_PUBLIC = 1, VISIBILITY_PRIVATE = 2;

	/**
	 * Belongs to many user types
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function user_types()
	{
		return $this->belongsToMany(UserType::class, 'user_field_type', 'field_id', 'type_id');
	}

	/**
	 * Has one meta value for current user
	 * @return mixed
	 */
	public function user_meta()
	{
		return $this->hasOne(UserMeta::class, 'field_id');
	}

	public function scopeWithMeta($query, $userId)
	{
		return $query->with(['user_meta' => function ($q) use ($userId) {
			$q->where('user_id', $userId);
		}]);
	}

	/**
	 * Get control types
	 *
	 * @param null $type
	 * @return array|mixed
	 */
	public static function types($type = null)
	{
		$types = [
			self::TEXT_BOX        => 'Textbox',
			self::TEXT_AREA       => 'Textarea',
			self::DROP_DOWN       => 'Dropdown',
			self::DROP_DOWN_MULTI => 'Dropdown Multi',
		];

		return $type ? array_get($types, $type) : $types;
	}

	/**
	 * Get visibilities
	 *
	 * @param null $visibility
	 * @return array|mixed
	 */
	public static function visibilities($visibility = null)
	{
		$visibilities = [
			self::VISIBILITY_PUBLIC  => 'Public',
			self::VISIBILITY_PRIVATE => 'Private',
		];

		return $visibility ? array_get($visibilities, $visibility) : $visibilities;
	}

	/**
	 * Check if control is dropdown
	 *
	 * @param $type
	 * @return bool
	 */
	public static function isDropdown($type)
	{
		return $type == self::DROP_DOWN || $type == self::DROP_DOWN_MULTI;
	}

	/**
	 * Render control
	 *
	 * @param null $value
	 * @return \Illuminate\Support\HtmlString
	 */
	public function render($value = null)
	{
		if (!$value) {
			$value = $this->user_meta ? $this->user_meta->value : $this->value;
		}

		switch ($this->type) {
			case self::TEXT_BOX:
				return Form::text($this->id, $value, ['class' => 'form-control']);
			case self::TEXT_AREA:
				return Form::textarea($this->id, $value, ['class' => 'form-control']);
			case self::DROP_DOWN:
				return Form::select($this->id, $this->getValues($this->value), $value, ['class' => 'form-control']);
			case self::DROP_DOWN_MULTI:
				return Form::select("$this->id[]", $this->getValues($this->value), $value ? $this->getValues($value) : null, ['class' => 'form-control', 'multiple']);
			default:
				return "<p>Control not found</p>";
		}
	}

	/**
	 * Get dropdown values
	 *
	 * @param $values
	 * @return array
	 */
	public function getValues($values)
	{
		$result = [];

		foreach (explode(self::DELIMITER, $values) as $value) {
			$result[$value] = $value;
		}

		return $result;
	}

	/**
	 * Get associated user types
	 *
	 * @return string
	 */
	public function getUserTypes()
	{
		return $this->user_types->implode('title', ', ') ?: '-';
	}
}
