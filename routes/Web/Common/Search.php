<?php

/**
 * Search Controller
 */
 Route::get('search', 'SearchController@index')->name('search');
 Route::post('search', 'SearchController@redirect')->name('search');
 Route::get('search/{query}', 'SearchController@results')->name('search.results');
