<?php

namespace App\Services\Actor\User;

/**
 * Class Access
 * @package App\Services\Actor\User
 */
class Access
{
	const ACTIVE_PROFILE = 'active_profile';
	const FAILED_INTAKE = 'failed_intake';

	/**
	 * Laravel application
	 *
	 * @var \Illuminate\Foundation\Application
	 */
	public $app;

	/**
	 * Create a new confide instance.
	 *
	 * @param \Illuminate\Foundation\Application $app
	 */
	public function __construct($app)
	{
		$this->app = $app;
	}

	/**
	 * Get the currently authenticated user or null.
	 */
	public function user()
	{
		return auth()->user();
	}

	/**
	 * Set the active profile
	 */
	public function setActiveProfile($id)
	{
		session()->put(self::ACTIVE_PROFILE, $id);
	}

	/**
	 * Get the currently active profile or null
	 */
	public function profile()
	{
		if (!auth()->user()) {
			return;
		}

		return auth()->user()->brands->find(session()->get(self::ACTIVE_PROFILE, '0'), auth()->user());
	}

	/**
	 * Get all profiles
	 */
	public function profiles()
	{
		return collect([auth()->user()])->merge(auth()->user()->brands);
	}

	/**
	 * Get the currently authenticated user's id
	 * @return mixed
	 */
	public function id()
	{
		return auth()->id();
	}

	/**
	 * Save failed intake into session
	 */
	public function saveFailedIntake($data)
	{
		session()->put(self::FAILED_INTAKE, $data);
	}

	/**
	 * Get failed intake from session or null
	 * @return mixed
	 */
	public function getFailedIntake()
	{
		return session()->get(self::FAILED_INTAKE);
	}

	/**
	 * Clear failed intake
	 */
	public function flushFailedIntake()
	{
		session()->forget(self::FAILED_INTAKE);
	}

	/**
	 * Check if the current user has a sufficient plan
	 *
	 * @return bool
	 */
	public function hasSufficientPlan()
	{
		if ($this->user() && $this->user()->subscribed('main')) {
			return $this->user()->subscription('main')->stripe_plan == 'enterprise'
				|| $this->user()->brands->count() < 5;
		}

		return false;
	}

	/**
	 * Checks if the current user has a Role by its name or id
	 *
	 * @param  string $role Role name.
	 * @return bool
	 */
	public function hasRole($role)
	{
		if ($user = $this->user()) {
			return $user->hasRole($role);
		}

		return false;
	}

	/**
	 * Checks if the user has either one or more, or all of an array of roles
	 * @param  $roles
	 * @param  bool     $needsAll
	 * @return bool
	 */
	public function hasRoles($roles, $needsAll = false)
	{
		if ($user = $this->user()) {
			//If not an array, make a one item array
			if (!is_array($roles)) {
				$roles = [$roles];
			}

			return $user->hasRoles($roles, $needsAll);
		}

		return false;
	}

	/**
	 * Check if the current user has a permission by its name or id
	 *
	 * @param  string $permission Permission name or id.
	 * @return bool
	 */
	public function allow($permission)
	{
		if ($user = $this->user()) {
			return $user->allow($permission);
		}

		return false;
	}

	/**
	 * Check an array of permissions and whether or not all are required to continue
	 * @param  $permissions
	 * @param  $needsAll
	 * @return bool
	 */
	public function allowMultiple($permissions, $needsAll = false)
	{
		if ($user = $this->user()) {
			//If not an array, make a one item array
			if (!is_array($permissions)) {
				$permissions = [$permissions];
			}

			return $user->allowMultiple($permissions, $needsAll);
		}

		return false;
	}

	/**
	 * @param  $permission
	 * @return bool
	 */
	public function hasPermission($permission)
	{
		return $this->allow($permission);
	}

	/**
	 * @param  $permissions
	 * @param  $needsAll
	 * @return bool
	 */
	public function hasPermissions($permissions, $needsAll = false)
	{
		return $this->allowMultiple($permissions, $needsAll);
	}
}
