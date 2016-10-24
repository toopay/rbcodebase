<?php

namespace App\Repositories\Common\SEO\Contracts;

interface SEOFriendly
{
	/**
	 * Performs SEO settings.
	 *
	 * @param SEOTools $SEOTools
	 */
	public function loadSEO(SEOTools $SEOTools);
}
