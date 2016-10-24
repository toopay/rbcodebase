<?php

// https://github.com/artesaos/seotools

return [
	'meta'      => [
		/*
		 * The default configurations to be used by the meta generator.
		 */
		'defaults'       => [
			'title'        => 'DIY:DIFM',
			'description'  => 'Digital Marketing Tools & Training',
			'separator'    => ' - ',
			'keywords'     => [],
			'canonical'    => null, // Set null for using Url::current()
		],

		/*
		 * Webmaster tags are always added.
		 */
		'webmaster_tags' => [
			'google'    => null,
			'bing'      => null,
			'alexa'     => null,
			'pinterest' => null,
			'yandex'    => null,
		],
	],
	'opengraph' => [
		/*
		 * The default configurations to be used by the opengraph generator.
		 */
		'defaults' => [
			'title'        => 'DIY:DIFM - Digital Marketing Tools & Training',
			'description'  => 'Digital Marketing Tools & Training',
			'url'         => null,
			'type'        => false,
			'site_name'   => false,
			'images'      => ['url' => 'http://image.url.com/cover.jpg', 'size' => 300],
			'locale'      => app()->getLocale()
		],
	],
	'twitter' => [
		/*
		 * The default values to be used by the twitter cards generator.
		 */
		'defaults' => [
			'card'        => 'summary',
			'site'        => '@rob',
		],
	],
];
