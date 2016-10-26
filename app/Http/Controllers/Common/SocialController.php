<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Share;

class SocialController extends Controller
{
	public function index()
	{
		$postUrl = url('posts/1');
		$postTitle = 'Dummy post title';
		$postThumb = url('uploads/thumbnail.png');

		$links['facebook'] = Share::facebook($postUrl, $postTitle, $postThumb);
		$links['google_plus'] = Share::googleplus($postUrl, $postTitle, $postThumb);
		$links['pinterest'] = Share::pinterest($postUrl, $postTitle, $postThumb);
		$links['twitter'] = Share::twitter($postUrl, $postTitle, $postThumb);

		return view('app.get-social', compact('links'));
	}
}
