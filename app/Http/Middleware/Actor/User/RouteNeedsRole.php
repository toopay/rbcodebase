<?php

namespace App\Http\Middleware\Actor\User;

use Closure;

/**
 * Class RouteNeedsRole
 * @package App\Http\Middleware
 */
class RouteNeedsRole
{

	/**
	 * @param $request
	 * @param Closure $next
	 * @param $role
	 * @param bool $needsAll
	 * @return mixed
	 */
	public function handle($request, Closure $next, $role, $needsAll = false)
	{
		/**
		 * Roles array
		 */
		if (strpos($role, ";") !== false) {
			$roles = explode(";", $role);
			$access = access()->hasRoles($roles, ($needsAll === "true" ? true : false));
		} else {
			/**
			 * Single role
			 */
			$access = access()->hasRole($role);
		}


		if (! $access) {
			return redirect()
				->route('frontend.index')
				->withFlashDanger(trans('auth.general_error'));
		}

		return $next($request);
	}
}
