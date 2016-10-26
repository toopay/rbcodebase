<?php

/**
 * Public Controllers
 */
Route::get('/', 'MarketingController@index')->name('marketing.index');
Route::get('about', 'MarketingController@about')->name('marketing.about');
Route::get('features', 'MarketingController@features')->name('marketing.features');
Route::get('pricing', 'MarketingController@pricing')->name('marketing.pricing');
Route::get('legal', 'MarketingController@legal')->name('marketing.legal');
Route::get('sitemap', 'MarketingController@sitemap')->name('marketing.sitemap');


/**
 * Extras
 */

//Route::get('sitemap', 'SitemapController@index'); // @TODO: Add HTML Sitemap
Route::get('get-social', 'SocialController@index');
