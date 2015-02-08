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
	Route::get('employment', function()
	{
		return View::make('qualification/employment');
	});
	Route::get('pro_degree', function()
	{
		return View::make('qualification/pro_degree');
	});
	Route::get('taining_work_ojt', function()
	{
		return View::make('qualification/taining_work_ojt');
	});
	Route::get('language', function()
	{
		return View::make('qualification/language');
	});
	Route::get('technical_licence', function()
	{
		return View::make('qualification/technical_licence');
	});
	Route::get('aircraft_qualification', function()
	{
		return View::make('qualification/aircraft_qualification');
	});
	Route::get('reference', function()
	{
		return View::make('qualification/reference');
	});
	Route::get('emp_verification', function()
	{
		return View::make('qualification/emp_verification');
	});
	Route::get('other', function()
	{
		return View::make('qualification/other');
	});

});