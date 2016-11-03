<?php

/**
 * Global helpers file with misc functions
 */

if (! function_exists('app_name')) {
	/**
	 * Helper to grab the application name
	 *
	 * @return mixed
	 */
	function app_name()
	{
		return config('app.name');
	}
}

if (! function_exists('access')) {
	/**
	 * Access (lol) the Access:: facade as a simple function
	 */
	function access()
	{
		return app('access');
	}
}

if ( ! function_exists('history'))
{
	/**
	 * Access the history facade anywhere
	 */
	function history()
	{
		return app('history');
	}
}

if (! function_exists('gravatar')) {
	/**
	 * Access the gravatar helper
	 */
	function gravatar()
	{
		return app('gravatar');
	}
}

if (! function_exists('getFallbackLocale')) {
	/**
	 * Get the fallback locale
	 *
	 * @return \Illuminate\Foundation\Application|mixed
	 */
	function getFallbackLocale()
	{
		return config('app.fallback_locale');
	}
}

if (! function_exists('getLanguageBlock')) {

	/**
	 * Get the language block with a fallback
	 *
	 * @param $view
	 * @param array $data
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	function getLanguageBlock($view, $data = [])
	{
		$components = explode("lang", $view);
		$current  = $components[0]."lang.".app()->getLocale().".".$components[1];
		$fallback  = $components[0]."lang.".getFallbackLocale().".".$components[1];

		if (view()->exists($current)) {
			return view($current, $data);
		} else {
			return view($fallback, $data);
		}
	}
}


if (!function_exists('checkActiveRoute')) {
	function checkActiveRoute($path, $parent_check = false, $active = 'active')
	{
		// Clean up path to check against... and refactor later
		$path = ltrim($path, '/');

		if ($parent_check && Request::is($path ."/*")) {
			return 'active';
		} elseif (Request::is($path)) {
			return 'active';
		} else {
			return '';
		}

		/* @TODO: Refactor
		$path = explode('.', $path);
		$segment = 1;
		foreach($path as $p) {
			if((request()->segment($segment) == $p) == false) {
				return '';
			}
			$segment++;
		}
		return ' active';
		*/
	}
}

if (!function_exists('rating_stars')) {
	function rating_stars($rating)
	{
		$starcount = 0;
		if ($rating > 0) {
			for ($i = 0; $i < $rating; $i++) {
				$starcount++;
				echo "<i class=\"fa fa-star\"></i>";
			}
			$half = round($rating) - round($rating / 0.5) * 0.5;
			if ($half == 0.5) {
				echo "<i class=\"fa fa-star-half-o\"></i>";
				$starcount++;
			}
			$blank = 5 - $starcount;
			for ($i = 0; $i < $blank; $i++) {
				echo "<i class=\"fa fa-star-o\"></i>";
				$starcount++;
			}
		}
	}
}

/**
 * Get language list
 *
 * @return array
 */
function get_language_list()
{
	$languages = config('locale.languages');

	$result = [];

	foreach ($languages as $key => $value) {
		$result[$key] = $value[2];
	}

	return $result;
}
