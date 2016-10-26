<?php

namespace App\Http\Controllers\Common;

use App\Repositories\Common\Breadcrumbs;
use App\Http\Controllers\Controller;
use App\Models\Actor\User\User;
use App\Models\App\Forum\ForumThread;
use App\Models\App\Term\Term;
use Illuminate\Http\Request;
use SEO;

/**
 * Class LanguageController
 * @package App\Http\Controllers\Common
 */
class SearchController extends Controller
{

	public function __construct()
	{
		// Set Base Breadcrumb

		Breadcrumbs::push('<i class="fa fa-home"></i>', route('marketing.index'));
	}

	public function index()
	{
		// Specify Title
		$title = 'Search'; // @TODO: Translate

		// Set Breadcrumbs
		Breadcrumbs::push($title, route('search'));

		// Return View
		return view('common.search.index', compact('title'));
	}

	// Redirect Search Terms
	public function redirect(Request $request)
	{
		// Get Search Query
		$query = $request->input('query');
		// Clean the search query
		$query = urlencode(strtolower($query));

		return redirect()->route('search.results', [$query]);
	}

	public function results($query)
	{
	/* Initialize */
		$count = 0;
		$query = urldecode($query);

	/* Get Data */

		// Get CMS

		// Get Forum
		$forum_threads = ForumThread::whereTranslationLike('title', 'like', '%'.$query.'%')->orWhere('slug', 'like', '%'.$query.'%')->with('topic')->translated()->get();
			// @TODO: whereTranslationLike('title', '%'.$query.'%')->
			// @TODO: check comments
		$count = $count + $forum_threads->count();

		// Get Terms
		$terms = Term::whereTranslationLike('text', '%'.$query.'%')->orWhere('slug', 'like', '%'.$query.'%')->translated()->get();
			// @TODO: whereTranslationLike('title', '%'.$query.'%')->
		$count = $count + $terms->count();

		// Get Users
		$users = User::where('name_first', 'like', '%'.$query.'%')->orWhere('name_last', 'like', '%'.$query.'%')->get();
		$count = $count + $users->count();

	/* Prepare Output */

		// Specify Title
		$titleParent = 'Search'; // @TODO: Translate
		$title = 'Results for &ldquo;'. $query .'&rdquo;'; // @TODO: Translate

		// Set Breadcrumbs
		Breadcrumbs::push($titleParent, route('search'));
		Breadcrumbs::push($title, route('search.results', $query));

		// Return View
		return view('common.search.results', compact('title', 'query', 'count', 'terms', 'users', 'forum_threads'));
	}




	// @TODO: Use or destroy
	public function hyphenize($string)
	{
		$dict = [
			"I'm"      => "I am",
			"thier"    => "their",
		];
		return strtolower(
			preg_replace(
				[ '#[\\s-]+#', '#[^A-Za-z0-9\. -]+#' ],
				[ '-', '' ],
				// the full cleanString() can be download from http://www.unexpectedit.com/php/php-clean-string-of-utf8-chars-convert-to-similar-ascii-char
				cleanString(
					str_replace(
						// preg_replace to support more complicated replacements
						array_keys($dict),
						array_values($dict),
						urldecode($string)
					)
				)
			)
		);
	}

	// @TODO: Use or destroy
	public function cleanString($text)
	{
		$utf8 = [
			'/[áàâãªä]/u'   =>   'a',
			'/[ÁÀÂÃÄ]/u'    =>   'A',
			'/[ÍÌÎÏ]/u'     =>   'I',
			'/[íìîï]/u'     =>   'i',
			'/[éèêë]/u'     =>   'e',
			'/[ÉÈÊË]/u'     =>   'E',
			'/[óòôõºö]/u'   =>   'o',
			'/[ÓÒÔÕÖ]/u'    =>   'O',
			'/[úùûü]/u'     =>   'u',
			'/[ÚÙÛÜ]/u'     =>   'U',
			'/ç/'           =>   'c',
			'/Ç/'           =>   'C',
			'/ñ/'           =>   'n',
			'/Ñ/'           =>   'N',
			'/–/'           =>   '-', // UTF-8 hyphen to "normal" hyphen
			'/[’‘‹›‚]/u'    =>   ' ', // Literally a single quote
			'/[“”«»„]/u'    =>   ' ', // Double quote
			'/ /'           =>   ' ', // nonbreaking space (equiv. to 0x160)
		];
		return preg_replace(array_keys($utf8), array_values($utf8), $text);
	}
}
