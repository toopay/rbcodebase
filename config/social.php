<?php

return [

	'services' => [

		'facebook' => [
			'name' => 'Facebook',
		],

		'twitter' => [
			'name' => 'Twitter',
		],

		'linkedin' => [
			'name' => 'LinkedIn',
		],

		'google' => [
			'name' => 'Google',
		],

		'github' => [
			'name' => 'GitHub',
		],

		'bitbucket' => [
			'name' => 'LinkedIn',
		],

	],

	'events' => [

		'github' => [

			'created' => \App\Events\Social\GitHubAccountWasLinked::class,

		],

		'twitter' => [

			'created' => \App\Events\Social\TwitterAccountWasLinked::class,

		],

	],

];
