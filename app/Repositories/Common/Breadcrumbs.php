<?php

namespace App\Repositories\Common;

class Breadcrumbs
{

	/**
	 * Breadcrumbs stack
	 */
	protected static $breadcrumbs = [];
	protected static $last_title;

	/**
	 * Generate breadcrumb
	 *
	 * @access  public
	 * @return  string
	 */
	static function show()
	{
		if (count(static::$breadcrumbs) > 0) {
			$breadcrumbs = [];
			$i = 0;
			foreach (static::$breadcrumbs as $breadcrumb) {
				$i++;
				$item = (object) $breadcrumb;
				$item->last = $i == count(static::$breadcrumbs);
				$breadcrumbs[] = $item;
			}

			return view('includes.partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs]);
		}

		// Empty one
		return '';
	}


	/**
	 * Append crumb to stack
	 *
	 * @access  public
	 * @param   string $page
	 * @param   string $href
	 * @return  void
	 */
	static function push($page, $href)
	{
		// no page or href provided
		if (!$page or !$href) {
			return;
		}

		// push breadcrumb
		static::$breadcrumbs[$href] = ['title' => $page, 'url' => $href];
	}

	/**
	 * Prepend crumb to stack
	 *
	 * @access  public
	 * @param   string $page
	 * @param   string $href
	 * @return  void
	 */
	static function unshift($page, $href)
	{
		// no crumb provided
		if (!$page or !$href) {
			return;
		}

		// add at firts
		array_unshift(static::$breadcrumbs, ['title' => $page, 'url' => $href]);
	}
}
