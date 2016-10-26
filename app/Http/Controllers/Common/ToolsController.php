<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Repositories\Common\Breadcrumbs;

/**
 * Class DashboardController
 * @package App\Http\Controllers\Common
 */
class ToolsController extends Controller
{

	public function __construct()
	{
		// Set Base Breadcrumb

		Breadcrumbs::push('<i class="fa fa-home"></i>', route('marketing.index'));
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		// Specify Title
		$title = 'Tools'; // @TODO: Translate

		// Set Breadcrumbs
		Breadcrumbs::push($title, route('tools.index'));

		// Return View
		return view('common.tools.index', compact('title'));
	}
}
