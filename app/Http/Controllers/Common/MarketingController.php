<?php

namespace App\Http\Controllers\Common;

use App\Repositories\Common\Breadcrumbs;
use App\Http\Controllers\Controller;
use SEO;

/**
 * Class PublicController
 * @package App\Http\Controllers\Common
 */
class MarketingController extends Controller
{

	public function __construct()
	{
		// Set Base Breadcrumb
		Breadcrumbs::push('<i class="fa fa-home"></i>', route('marketing.index'));
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{

		// Specify Title
		$title = 'DIY:DIFM'; // @TODO: Translate
		$description = ''; // @TODO: Translate

		// Set Page Meta
		SEO::setTitle($title);
		SEO::setDescription($description);
		SEO::opengraph()->addProperty('locale', app()->getLocale());
//        SEO::opengraph()->addImage(['url' => 'http://image.url.com/cover.jpg', 'size' => 300]);
//        SEO::opengraph()->setUrl(url()->current());

		// Set Breadcrumbs
		Breadcrumbs::push($title, route('marketing.index'));

		// Return View
		return view('common.marketing.index', compact('title'));
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function about()
	{
		// Specify Title
		$title = 'About'; // @TODO: Translate
		$description = ''; // @TODO: Translate

		// Set Page Meta
		SEO::setTitle($title);
		SEO::setDescription($description);

		// Set Breadcrumbs
		Breadcrumbs::push($title, route('marketing.about'));

		// Return View
		return view('common.marketing.about', compact('title'));
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function features()
	{
		// Specify Title
		$title = 'Features'; // @TODO: Translate
		$description = ''; // @TODO: Translate

		// Set Page Meta
		SEO::setTitle($title);
		SEO::setDescription($description);

		// Set Breadcrumbs
		Breadcrumbs::push($title, route('marketing.features'));

		// Return View
		return view('common.marketing.features', compact('title'));
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function pricing()
	{
		// Specify Title
		$title = 'Pricing'; // @TODO: Translate
		$description = ''; // @TODO: Translate

		// Set Page Meta
		SEO::setTitle($title);
		SEO::setDescription($description);

		// Set Breadcrumbs
		Breadcrumbs::push($title, route('marketing.pricing'));

		// Return View
		return view('common.marketing.pricing', compact('title'));
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function legal()
	{
		// Specify Title
		$title = 'Legal'; // @TODO: Translate
		$description = ''; // @TODO: Translate

		// Set Page Meta
		SEO::setTitle($title);
		SEO::setDescription($description);

		// Set Breadcrumbs
		Breadcrumbs::push($title, route('marketing.legal'));

		// Return View
		return view('common.marketing.legal', compact('title'));
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function sitemap()
	{
		// Specify Title
		$title = 'Sitemap'; // @TODO: Translate
		$description = ''; // @TODO: Translate

		// Set Page Meta
		SEO::setTitle($title);
		SEO::setDescription($description);

		// Set Breadcrumbs
		Breadcrumbs::push($title, route('marketing.sitemap'));

		// Return View
		return view('common.marketing.sitemap', compact('title'));
	}
}
