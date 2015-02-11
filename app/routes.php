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

Route::group(array('prefix' => 'qualification','before'=>'auth.basic'), function()
{

Route::get('/', function()
	{
		return 'hello';
		//return View::make('qualification/home');
	});
	Route::get('personnel', 'QualificationController@personnel');
	Route::get('education', 'QualificationController@education');
	Route::get('employment', 'QualificationController@employment');
	Route::get('pro_degree', 'QualificationController@pro_degree');
	Route::get('taining_work_ojt', 'QualificationController@taining_work_ojt');
	Route::get('language', 'QualificationController@language');
	Route::get('technical_licence', 'QualificationController@technical_licence');
	Route::get('aircraft_qualification', 'QualificationController@aircraft_qualification');
	Route::get('reference', 'QualificationController@reference');
	Route::get('emp_verification', 'QualificationController@emp_verification');
	Route::get('other', 'QualificationController@other');
	//insert data
	Route::post('savePersonnel', 'QualificationController@savePersonnel');
	Route::post('saveAccademic', 'QualificationController@saveAccademic');
	Route::post('saveThesis', 'QualificationController@saveThesis');
	//delete data 
	Route::get('deletePersonnel/{id}', function($id){
		DB::table('qualification_personal')->where('id', '=', $id)->delete();
		return Redirect::to('qualification/personnel')->with('message', 'Successfully Saved!!');
		
		});
	//Edit data
	Route::post('editPersonnel', 'QualificationController@editPersonnel');
	
	

	

});