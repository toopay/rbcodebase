<?php

/**
 * SiteMap Controllers
 */

Route::get('sitemap_index.xml', 'SitemapController@index')->name('sitemap.index');
Route::get('sitemap_marketing.xml', 'SitemapController@marketing')->name('sitemap.marketing');
Route::get('sitemap_user.xml', 'SitemapController@user')->name('sitemap.user');
Route::get('sitemap_forum.xml', 'SitemapController@forum')->name('sitemap.forum');
Route::get('sitemap_forum_thread.xml', 'SitemapController@forum_thread')->name('sitemap.forum.thread');
Route::get('sitemap_glossary.xml', 'SitemapController@glossary')->name('sitemap.glossary');
