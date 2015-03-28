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
//Start Role Initialization 
Route::get('/secret', function()
{
   // Auth::loginUsingId(2);
 
    $user = Auth::user();
	return View::make('test')
			->with('user',$user)
			->with('lavel1','Chief Admin')
			->with('lavel2','Admin')
	;
 
    
});
Route::get('roleInit', function()
{
//ROll define   
    $cAdmin = new Role();
    $cAdmin->role_name = 'Chief Admin';
    $cAdmin->save();
 
    $admin = new Role();
    $admin->role_name = 'Admin';
    $admin->save();
	
	$dAdmin=new Role();
	$dAdmin->role_name='Deputy Admin';
	$dAdmin->save();
	
	$inspector=new Role();
	$inspector->role_name='Inspector';
	$inspector->save();
	
	$org=new Role();
	$org->role_name='Organization';
	$org->save();
	
	$executive=new Role();
	$executive->role_name='Executive';
	$executive->save();
	
	$user=new Role();
	$user->role_name='User';
	$user->save();
	
	$visitor=new Role();
	$visitor->role_name='visitor';
	$visitor->save();
//End Roll Define

//Permission define
 
    $read = new Permission();
    $read->name = 'can_read';
    $read->display_name = 'Can Read ';
    $read->save();
	
	$write = new Permission();
    $write->name = 'can_write';
    $write->display_name = 'Can write';
    $write->save();
 
    $edit = new Permission();
    $edit->name = 'can_edit';
    $edit->display_name = 'Can Update';
    $edit->save();
	
	$softDelete = new Permission();
    $softDelete->name = 'can_soft_delete';
    $softDelete->display_name = 'Can Soft Delete';
    $softDelete->save();
	
	$delete = new Permission();
    $delete->name = 'can_delete';
    $delete->display_name = 'Can Delete';
    $delete->save();
 //End Permission 
 //chief Admin power
    $cAdmin->attachPermission($read);
    $cAdmin->attachPermission($write);
    $cAdmin->attachPermission($edit);
    $cAdmin->attachPermission($softDelete);
    $cAdmin->attachPermission($delete);
//End chief Admin Power
// Admin power
    $admin->attachPermission($read);
    $admin->attachPermission($write);
    $admin->attachPermission($edit);
    $admin->attachPermission($softDelete);
   // $cAdmin->attachPermission($delete);
//End  Admin Power
//Deputy Admin power
    $dAdmin->attachPermission($read);
    $dAdmin->attachPermission($write);
    $dAdmin->attachPermission($edit);
    $dAdmin->attachPermission($softDelete);
   // $cAdmin->attachPermission($delete);
//End  Deputy Admin Power
//Inspector power
    $inspector->attachPermission($read);
    $inspector->attachPermission($write);
    //$inspector->attachPermission($edit);
   // $inspector->attachPermission($softDelete);
   // $cAdmin->attachPermission($delete);
//End Inspector Power
//ORG power
    $org->attachPermission($read);
    $org->attachPermission($write);
    $org->attachPermission($edit);
   // $inspector->attachPermission($softDelete);
   // $cAdmin->attachPermission($delete);
//End ORG Power
//executive power
    $executive->attachPermission($read);
    //$executive->attachPermission($write);
   // $executive->attachPermission($edit);
   // $inspector->attachPermission($softDelete);
   // $cAdmin->attachPermission($delete);
//End executive Power
	
//User power
    $user->attachPermission($read);
    //$executive->attachPermission($write);
   // $executive->attachPermission($edit);
   // $inspector->attachPermission($softDelete);
   // $cAdmin->attachPermission($delete);
//End User Power
//Visitor power
    $user->attachPermission($read);
    //$executive->attachPermission($write);
   // $executive->attachPermission($edit);
   // $inspector->attachPermission($softDelete);
   // $cAdmin->attachPermission($delete);
//End Visitor Power
	
  
 
    $user1 = User::find(1);
    //$user2 = User::find(2);
 
    $user1->attachRole($cAdmin);
   // $user2->attachRole($admin);
 
    return 'Woohoo!';
});
//End Role Initialization 
Route::get('login',function(){
	return Redirect::to('/');
});
Route::post('login','SettingsController@login');

Route::group(array('before'=>'auth'),function(){	
	Route::get('dashboard','DashboardController@index');
});

Route::get('/',function(){
	return View::make('welcome.index');
});
Route::get('contact',function(){
	return View::make('welcome.contact');
});
Route::get('faq',function(){
	return View::make('welcome.faq');
});
Route::get('about',function(){
	return View::make('welcome.about');
});

Route::group(array('before'=>'auth'),function(){
	Route::get('settings','SettingsController@index');
	Route::get('logout','SettingsController@logout');
	Route::get('viewUsers','SettingsController@viewUsers');
	Route::post('newUser/save','SettingsController@saveUser');
	Route::post('newUser/update','SettingsController@update');
	Route::post('user/delete','SettingsController@delete');
	Route::post('changePassword','SettingsController@changePassword');
});
Route::group(array('prefix' => 'aircraft','before'=>'auth'),function(){
	Route::get('main','AircraftController@main');
	Route::post('savePrimary','AircraftController@savePrimary');
	Route::get('single/{mm}/{msn}','AircraftController@aircraftSingle');
});
Route::group(array('prefix' => 'qualification','before'=>'auth'), function()
{
	
	Route::get('employees','QualificationController@employees'); 
	Route::get('main','QualificationController@main'); 
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
	Route::get('comp_view', 'QualificationController@comp_view_per');
	Route::get('comp_view/{id}', 'QualificationController@comp_view');
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

Route::group(array('prefix'=>'safety','before'=>'auth'),function(){
	Route::get('main','safetyConcernsController@main');
	//entry Form
	Route::get('entry','safetyConcernsController@entry');
	//view list
	Route::get('issuedList','safetyConcernsController@issuedList');
	//delete
	Route::get('deleteSafety/{id}',function($id){
			DB::table('safeties')->where('id', '=', $id)->delete();
			return Redirect::to('safety/issuedList')->with('message', 'Successfully Deleted!!');
	});
	//save entry 
	Route::post('safetyConcern/save','safetyConcernsController@save');
	Route::post('safetyConcern/update','safetyConcernsController@update');
});

Route::group(array('prefix'=>'admin','before'=>'auth'),function(){
	Route::get('main','AdminTrackingController@main');
	//entry Form
	Route::get('entry','AdminTrackingController@entry');
	//view list
	Route::get('issuedList','AdminTrackingController@issuedList');
	//delete
	Route::get('deleteAdmin/{id}',function($id){
			DB::table('admin_trackings')->where('id', '=', $id)->delete();
			return Redirect::to('admin/issuedList')->with('message', 'Successfully Deleted!!');
	});
	//save entry 
	Route::post('save','AdminTrackingController@save');
	Route::post('update','AdminTrackingController@update');
});
Route::group(array('prefix'=>'doc','before'=>'auth'),function(){
	
	Route::get('main','DocController@main');
	Route::get('entry','DocController@entry');
	Route::get('listView','DocController@listView');
	//entry 
	Route::post('save','DocController@save');
	//update
	Route::post('update','DocController@update');
	//delete
	Route::get('delete/{id}', function($id){
		DB::table('document_controllers')->where('id', '=', $id)->delete();
		return Redirect::to('doc/listView')->with('message', 'Successfully Deleted!!');
		
		});
	
	
});


