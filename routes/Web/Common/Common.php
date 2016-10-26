<?php

//Route::get('macros', 'FrontendController@macros')->name('app.macros');



/**
 * Tests
 */
	Route::get('test', function () {
		abort(500);
		return view('test');
	})->middleware('web');


/**
 * Tests Show routes
 */

	Route::get('routes', function () {
		$routeCollection = Route::getRoutes();

		echo "<table style='width:100%'>";
		echo "<tr>";
			echo "<td width='10%'><h4>HTTP Method</h4></td>";
			echo "<td width='20%'><h4>Route</h4></td>";
			echo "<td width='20%'><h4>Path</h4></td>";
			echo "<td width='50%'><h4>Corresponding Action</h4></td>";
		echo "</tr>";
		foreach ($routeCollection as $value) {
			echo "<tr>";
				echo "<td>" . $value->getMethods()[0] . "</td>";
				echo "<td>" . $value->getName() . "</td>";
			if ($value->getMethods()[0] == 'GET') {
				echo "<td><a href='/". $value->getPath() ."'>" . $value->getPath() . "</a></td>";
			} else {
				echo "<td>" . $value->getPath() . "</td>";
			}
				echo "<td>" . $value->getActionName() . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	});
