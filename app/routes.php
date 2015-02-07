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
	return View::make('hello');
});
Route::get('resume', function()
{
	//return 'hello';
	return View::make('resume/resume');
});

Route::group(array('prefix' => 'qualification'), function()
{

Route::get('home', function()
	{
		//return 'hello';
		return View::make('qualification/home');
	});
	Route::get('personnel', function()
	{
		return View::make('qualification/personnel');
	});
	Route::get('education', function()
	{
		return View::make('qualification/education');
	});

});