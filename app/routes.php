<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$var = array('test');

	$nombre = 'Marianna';

	return View::make('hello', compact('var', 'nombre'));
});

Route::get('/test/{id}', function($id){

	return Response::json(array('status' => 200, 'message' => $id));
	//return json_encode(array('status' => 200, 'message' => 'OK'));

});

Route::get('/llamando/al/controller/{param?}', 'HomeController@mimetodo');
