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

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('home');
    });

    Route::post('/upload', 'UploadController@upload');

    Route::get('/logout', 'AuthController@getLogout');

    Route::get('/login', 'AuthController@getLogin');

    Route::post('/login', 'AuthController@postLogin');

    Route::get('/files', 
    [
    	'middleware' => 'auth',
    	'uses' => 'FilesController@getFiles'
    ]);

});
