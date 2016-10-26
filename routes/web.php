<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//Temporary route for admin panel
Route::get('admin-test',function(){
	return view('admin.example');
});
Auth::routes();

/**
 * Common Routes
 */
Route::group(['namespace' => 'Common'], function () {
	require base_path('routes/Web/Common/Common.php');
	require base_path('routes/Web/Common/Search.php');
	require base_path('routes/Web/Common/Sitemap.php');
	require base_path('routes/Web/Common/Marketing.php');
	require base_path('routes/Web/Common/Language.php');
	require base_path('routes/Web/Common/Tools.php');
});
/**
 * Actor Routes
 */
Route::group(['namespace' => 'Actor'], function () {
	require base_path('routes/Web/Actor/User.php');
	//require base_path('routes/Web/Actor/Brand.php');
});

/**
 * App Routes
 */
Route::group(['namespace' => 'App'], function () {
	// Common
	//require base_path('routes/Web/App/Dashboard.php');
	// Application Specific
	//require base_path('routes/Web/App/Forum.php');
});

/**
 * Admin Routes
 * Namespaces indicate folder structure
 * Admin middleware groups web, auth, and routeNeedsPermission
 */
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
	/**
	 * These routes need view-admin permission
	 * (good if you want to allow more than one group in the admin,
	 * then limit the admin features by different roles or permissions)
	 *
	 * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
	 */

	/**
	 * Actor Routes
	 */
	Route::group(['prefix' => 'actor', 'namespace' => 'Actor'], function () {
		//require base_path('routes/Web/Admin/Actor/Brand.php');
		//require base_path('routes/Web/Admin/Actor/User.php');
	});


	/**
	 * Common Routes
	 */
	Route::group(['namespace' => 'Common'], function () {
		//require base_path('routes/Web/Admin/Common/Dashboard.php');
		//require base_path('routes/Web/Admin/Common/Mail.php');
		//require base_path('routes/Web/Admin/Common/LogViewer.php');
	});

	/**
	 * App Routes
	 */
	Route::group(['prefix' => 'app', 'namespace' => 'App'], function () {
		//require base_path('routes/Web/Admin/App/Forum.php');
	});

});

/**
 * API routes
 * Namespaces indicate folder structure
 * API throttling enabled (60 requests per minute)
 */
Route::group(['namespace' => 'API', 'prefix' => 'api', 'middleware' => 'api'], function () {
	Route::get('test', 'TestController@index');
});
