<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/benzaiten', function () {
	return view('pages.words');
});

Route::get('/translate/', function () {
	return view('index');
});


Route::get('api', function() {
    $routeCollection = Route::getRoutes();

    echo "<table style='width:100%'>";
    echo "<tr>";
        echo "<td width='10%'><h4>HTTP Method</h4></td>";
        echo "<td width='10%'><h4>Route</h4></td>";
        echo "<td width='80%'><h4>Corresponding Action</h4></td>";
    echo "</tr>";
    foreach ($routeCollection as $value) {
        echo "<tr>";
            echo "<td>" . $value->getMethods()[0] . "</td>";
            echo "<td>" . $value->getPath() . "</td>";
            echo "<td>" . $value->getActionName() . "</td>";
        echo "</tr>";
    }
    echo "</table>";
});





//Route::get('/api/v1/words/', 'Words@index');

Route::get('/api/v1/words/show/{limit}', 'Words@index');

Route::get('/api/v1/words/{lang}/translations/{platform}/{product}/{format}', 'apiservice@index');

Route::get('/api/v1/words/lang/{lang}', 'Words@language');

Route::POST('/api/v1/words/save/', 'Words@update');

Route::POST('/api/v1/words/add/', 'Words@add');

