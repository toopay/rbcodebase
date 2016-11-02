<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Repositories\Common\Breadcrumbs;
use SEO;

/**
 * Class DashboardController
 * @package App\Http\Controllers\App
 */
class DashboardController extends Controller
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
		$title = 'Dashboard';

		// Set Breadcrumbs
		Breadcrumbs::push($title, route('common.dashboard'));

		// Return View
		return view('common.dashboard');
	}
}
