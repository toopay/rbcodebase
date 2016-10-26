<?php

/**
 * Tools Controllers
 */

Route::group(['prefix' => 'tools'], function () {
	Route::get('/', 'ToolsController@index')->name('tools.index');
});
