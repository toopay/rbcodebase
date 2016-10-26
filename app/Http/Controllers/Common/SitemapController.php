<?php

namespace App\Http\Controllers\Common;

use Sitemap; // https://github.com/dwightwatson/sitemap
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Actor\User\User;
use App\Models\App\Term\Term;
use App\Models\App\Forum\ForumTopic;
use App\Models\App\Forum\ForumThread;

class SitemapController extends Controller
{

	// Sitemap Index
	public function index()
	{
		// Get a general sitemap.
		Sitemap::addSitemap(route('sitemap.marketing'));
		Sitemap::addSitemap(route('sitemap.user'));
		Sitemap::addSitemap(route('sitemap.forum'));
		Sitemap::addSitemap(route('sitemap.forum.thread'));
		Sitemap::addSitemap(route('sitemap.glossary'));
		//Sitemap::addSitemap('/sitemap_blog.xml');

		// Return the sitemap to the client.
		return Sitemap::index();
	}


	// Public Marketing & Site Pages Sitemap
	public function marketing()
	{
		Sitemap::addTag(route('marketing.index'));
		Sitemap::addTag(route('marketing.about'));
		Sitemap::addTag(route('marketing.features'));
		Sitemap::addTag(route('marketing.pricing'));
		Sitemap::addTag(route('marketing.legal'));

		return Sitemap::render();
	}


	// User Sitemaps
	public function user()
	{
		$users = User::all();

		foreach ($users as $user) {
			Sitemap::addTag(route('actor.user.profile.show', $user->name_slug), $user->updated_at, 'monthly', '0.4');
		}

		return Sitemap::render();
	}


	// Forum Topics
	public function forum()
	{
		$topics = ForumTopic::all();

		foreach ($topics as $topic) {
			Sitemap::addTag(route('app.forum.topic', [$topic->slug]), $topic->updated_at, 'weekly', '0.8');
		}

		return Sitemap::render();
	}


	// Forum Topics
	public function forum_thread()
	{
		// Get Related Threads
		$threads = ForumThread::join('forum_topics', 'forum_threads.forum_topic_id', '=', 'forum_topics.id')
					->select('forum_topics.slug as parent_slug', 'forum_threads.slug', 'forum_threads.updated_at')
					->translated()->get();

		foreach ($threads as $thread) {
			Sitemap::addTag(route('app.forum.thread', [$thread->parent_slug, $thread->slug]), $thread->updated_at, 'daily', '0.5');
		}

		return Sitemap::render();
	}


	// Glossary of Terms Sitemap
	public function glossary()
	{

		$glossary = Term::all();

		foreach ($glossary as $term) {
			Sitemap::addTag(route('app.term.show', $term), $term->updated_at, 'monthly', '0.7');
		}
		/* @TODO: 001 Add Multi Lingual Sitemaps
		Sitemap::addTag(new \Watson\Sitemap\Tags\MultilingualTag(
				$location,
				$lastModified,
				$changeFrequency,
				$priority,
				[
					'en' => $location . '?lang=en',
					'fr' => $location . '?lang=fr'
				]
			));
		*/
		return Sitemap::render();
	}


	// Blog Sitemap
	public function blog()
	{
		$posts = Post::all();

		foreach ($posts as $post) {
			Sitemap::addTag(
				route('posts.show', $post),
				$post->updated_at,
				'daily',
				'0.8',
				[
					'en' => $location . '?lang=en',
					'fr' => $location . '?lang=fr'
				]
			);
		}

		return Sitemap::render();
	}
}
