<?php

namespace App\Http\Controllers\Actor\User\Profile;

use App\Http\Controllers\Controller;
use App\Models\Actor\User\User;

use App\Repositories\Common\Breadcrumbs;
use SEO;

/**
 * Class ProfileController
 * @package App\Http\Controllers\App
 */
class MediaController extends Controller
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
		// User
		$user = access()->user();

		// Get Other Images
		$images = '';

		// Specify Title
		$title_parent = 'Profile'; // @TODO: Translate
		$title = 'Media';

		// Set Breadcrumbs
		Breadcrumbs::push($title_parent, route('actor.user.profile'));
		Breadcrumbs::push($title, route('actor.user.profile.media'));

		return view('actor.user.profile.media.index', compact('title', 'user'));
	}


}
