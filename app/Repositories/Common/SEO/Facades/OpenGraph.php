<?php

namespace App\Repositories\Common\SEO\Facades;

use Illuminate\Support\Facades\Facade;

class OpenGraph extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'seotools.opengraph';
	}
}
