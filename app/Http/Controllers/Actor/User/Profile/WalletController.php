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
class WalletController extends Controller
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

		// Get Payment Methods
		$methods = ''; // @TODO: Get Payment Methods

		// Specify Title
		$title_parent = 'Profile'; // @TODO: Translate
		$title = 'Wallet';

		// Set Breadcrumbs
		Breadcrumbs::push($title_parent, route('actor.user.profile'));
		Breadcrumbs::push($title, route('actor.user.wallet.index'));

		return view('actor.user.wallet.index', compact('title', 'user'));
	}


	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function history()
	{
		// User
		$user = access()->user();

		// Get Invoices
		$invoices = ''; // @TODO: Get invoices

		// Specify Title
		$title_parent = 'Profile'; // @TODO: Translate
		$title_parent2 = 'Wallet'; // @TODO: Translate
		$title = 'History';

		// Set Breadcrumbs
		Breadcrumbs::push($title_parent, route('actor.user.profile'));
		Breadcrumbs::push($title_parent2, route('actor.user.wallet.index'));
		Breadcrumbs::push($title, route('actor.user.wallet.history'));

		return view('actor.user.wallet.history', compact('title', 'user'));
	}

}
