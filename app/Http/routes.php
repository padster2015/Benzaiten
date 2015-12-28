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
    return view('index');
});



//Route::get('/api/v1/words/', 'Words@index');

Route::get('/api/v1/words/show/{limit}', 'Words@index');

Route::get('/api/v1/words/lang/{lang}', 'Words@language');

Route::post('/api/v1/words/save/', 'Words@create');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

