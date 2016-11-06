<?php

namespace App\Repositories\Common\SEO\Traits;

use App\Repositories\Common\SEO\Contracts\SEOFriendly;

trait SEOTools
{
	/**
	 * @return \App\Repositories\Common\SEO\Contracts\SEOTools;
	 */
	protected function seo()
	{
		return app('seotools');
	}

	/**
	 * @param SEOFriendly $friendly
	 *
	 * @return \App\Repositories\Common\SEO\Contracts\SEOFriendly;
	 */
	protected function loadSEO(SEOFriendly $friendly)
	{
		$SEO = $this->seo();

		$friendly->loadSEO($SEO);

		return $SEO;
	}
}
