<?php

namespace App\Repositories\Common\SEO\Facades;

use Illuminate\Support\Facades\Facade;

class TwitterCard extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'seotools.twitter';
	}
}
