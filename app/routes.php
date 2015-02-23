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
Route::group(array('before'=>'auth.basic'),function(){
	
Route::get('/','DashboardController@index');

Route::get('logout',function(){
	Auth::logout();
	Session::flush();
	return "Logout";
});
});


Route::group(array('prefix' => 'qualification','before'=>'auth.basic'), function()
{


Route::get('/', function()
	{
		return 'hello';
		//return View::make('qualification/home');
	});
	Route::get('pdf','QualificationController@pdf'); 
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
	Route::get('comp_view', 'QualificationController@comp_view');
	//insert data
	Route::post('savePersonnel', 'QualificationController@savePersonnel');
	Route::post('saveAccademic', 'QualificationController@saveAccademic');
	Route::post('saveThesis', 'QualificationController@saveThesis');
	Route::post('saveEmployment', 'QualificationController@saveEmployment');
	Route::post('pro_degree', 'QualificationController@proDegree');
	Route::post('saveTrainingWorkOJT','QualificationController@saveTrainingWorkOJT');
	Route::post('saveLanguage','QualificationController@saveLanguage');
	Route::post('saveTechnicalLicence','QualificationController@saveTechnicalLicence');
    Route::post('saveAircraftQualification','QualificationController@saveAircraftQualification');
	Route::post('saveReference','QualificationController@saveReference');
	Route::post('EmpVerification','QualificationController@EmpVerification');
	Route::post('savePublication','QualificationController@savePublication');
	Route::post('saveMembership','QualificationController@saveMembership');
	//delete data 
	Route::get('deletePersonnel/{id}', function($id){
		DB::table('qualification_personal')->where('id', '=', $id)->delete();
		return Redirect::to('qualification/personnel')->with('message', 'Successfully Deleted!!');
		
		});
	Route::get('deleteAccademic/{id}', function($id){
		DB::table('qualification_edu_accademic')->where('id', '=', $id)->delete();
		return Redirect::to('qualification/education')->with('message', 'Successfully Deleted!!');
		
		});
	Route::get('deleteThesis/{id}', function($id){
		DB::table('qualification_edu_thesis')->where('id', '=', $id)->delete();
		return Redirect::to('qualification/education')->with('message', 'Successfully Deleted!!');
		
		});
	Route::get('deleteEmployment/{id}', function($id){
		DB::table('qualification_emplyment')->where('id', '=', $id)->delete();
		return Redirect::to('qualification/employment')->with('message', 'Successfully Deleted!!');
		
		});
	Route::get('deleteProDegree/{id}', function($id){
		DB::table('qualification_pro_degree')->where('id', '=', $id)->delete();
		return Redirect::to('qualification/pro_degree')->with('message', 'Successfully Deleted!!');
		
		});
	Route::get('deleteTraining/{id}', function($id){
		DB::table('qualification_training_ojt')->where('id', '=', $id)->delete();
		return Redirect::to('qualification/taining_work_ojt')->with('message', 'Successfully Deleted!!');
		
		});
	Route::get('deleteLanguage/{id}', function($id){
		DB::table('qualification_language')->where('id', '=', $id)->delete();
		return Redirect::to('qualification/language')->with('message', 'Successfully Deleted!!');
		
		});
	Route::get('deleteTechlicence/{id}', function($id){
		DB::table('qualification_technical_licence')->where('id', '=', $id)->delete();
		return Redirect::to('qualification/technical_licence')->with('message', 'Successfully Deleted!!');
		
		});
	Route::get('deleteAirQualification/{id}', function($id){
		DB::table('qualification_aircraft')->where('id', '=', $id)->delete();
		return Redirect::to('qualification/aircraft_qualification')->with('message', 'Successfully Deleted!!');
		
		});
	Route::get('deleteReference/{id}', function($id){
		DB::table('qualification_reference')->where('id', '=', $id)->delete();
		return Redirect::to('qualification/reference')->with('message', 'Successfully Deleted!!');
		
		});
	Route::get('deleteEnpVeri/{id}', function($id){
		DB::table('qualification_employee_verification')->where('id', '=', $id)->delete();
		return Redirect::to('qualification/emp_verification')->with('message', 'Successfully Deleted!!');
		
		});
	Route::get('deletePublication/{id}', function($id){
		DB::table('qualification_others_publication')->where('id', '=', $id)->delete();
		return Redirect::to('qualification/other')->with('message', 'Successfully Deleted!!');
		
		});
	Route::get('deleteMembership/{id}', function($id){
		DB::table('qualification_others_membership')->where('id', '=', $id)->delete();
		return Redirect::to('qualification/other')->with('message', 'Successfully Deleted!!');
		
		});
	//Edit data
	Route::post('editPersonnel', 'QualificationController@editPersonnel');
	Route::post('updateAccademic', 'QualificationController@updateAccademic');
	Route::post('updateThesis', 'QualificationController@updateThesis');
	Route::post('updateEmployment', 'QualificationController@updateEmployment');
	Route::post('updatePro_degree', 'QualificationController@updatePro_degree');
	Route::post('updateTrainingWorkOJT', 'QualificationController@updateTrainingWorkOJT');
	Route::post('updateLanguage', 'QualificationController@updateLanguage');
	Route::post('updateTechnicalLicence', 'QualificationController@updateTechnicalLicence');
	Route::post('updateAircraftQualification', 'QualificationController@updateAircraftQualification');
	Route::post('updateReference', 'QualificationController@updateReference');
	Route::post('updateEmpVerification', 'QualificationController@updateEmpVerification');
	Route::post('updatePublication', 'QualificationController@updatePublication');
	Route::post('updateMembership', 'QualificationController@updateMembership');
	
	

	

});

Route::group(array('prefix'=>'safety','before'=>'auth.basic'),function(){
	Route::get('entry','safetyConcernsController@entry');
	Route::get('issuedList','safetyConcernsController@issuedList');
	Route::get('deleteSafety/{id}',function($id){
			DB::table('safeties')->where('id', '=', $id)->delete();
			return Redirect::to('safety/issuedList')->with('message', 'Successfully Deleted!!');
	});
});
	//save entry 
	Route::post('safetyConcern/save','safetyConcernsController@save');
	Route::post('safetyConcern/update','safetyConcernsController@update');

