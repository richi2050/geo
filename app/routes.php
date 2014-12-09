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


/*Route::get('/', function()
{
	//return View::make('users.index');
});
*/

Route::get('/', function(){
	return View::make('login');
});
Route::post('/authentication',array('as' =>'login','uses'=>'AuthController@postLogin'));

Route::get('logout',array('us' =>'logout','uses' => 'AuthController@logOut'));


Route::get('/list/user', array('as' => 'home' , 'uses' => 'UserController@index'));

Route::get('/edit/{id}', array('us' => 'home/edit' , 'uses' => 'UserController@edit'));

Route::post('/update/{id}', array('us' => 'home/edit' , 'uses' => 'UserController@update'));