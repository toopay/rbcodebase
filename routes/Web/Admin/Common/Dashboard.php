<?php

Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
	Route::get('dashboard/ecommerce', 'DashboardController@ecommerce')->name('admin.dashboard_ecommerce');
	Route::get('dashboard/saas', 'DashboardController@saas')->name('admin.dashboard_saas');
	Route::get('dashboard/finance', 'DashboardController@finance')->name('admin.dashboard_finance');
	Route::get('dashboard/analytics', 'DashboardController@analytics')->name('admin.dashboard_analytics');
