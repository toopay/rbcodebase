<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;

/**
 * Class LanguageController
 * @package App\Http\Controllers\Common
 */
class LanguageController extends Controller
{
	/**
	 * @param $lang
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function swap($lang)
	{
		session()->put('locale', $lang);

		\App::setLocale($lang);

		// If user is logged set current language to match dropdown.
		if ($user = auth()->user()) {
			$user->language = $lang;
			$user->save();
		}

		return redirect()->back();
	}
}
