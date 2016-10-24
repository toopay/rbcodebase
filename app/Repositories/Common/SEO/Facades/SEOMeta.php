<?php

namespace App\Repositories\Common\SEO\Facades;

use Illuminate\Support\Facades\Facade;

class SEOMeta extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'seotools.metatags';
	}
}
