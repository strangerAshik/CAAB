<?php

class QualificationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function years(){
		$years['']='Year';
		for($i =date("Y"); $i >=1971; $i--){$years[$i] = $i;} return $years;
	}
	public function dates(){
		$dates['']='Day';
		for($i =1; $i <=31; $i++){$dates[$i] = $i;}	return $dates;
	}
	public function months(){
		$months = [
		''=>'Month',
    'January' => 'January',
    'February' => 'February',
    'March' => 'March',
    'April' => 'April',
    'May' => 'May',
    'June' => 'June',
    'July' => 'July',
    'August' => 'August',
    'September' => 'September',
    'October' => 'October',
    'November' => 'November',
    'December' => 'December'
	];
		return $months;
	}
	public function personnel()
	{
		$dates=$this->dates();
		$months=$this->months();
		$years=$this->years();
		
		$id = Auth::user()->emp_id();
		$query=DB::table('qualification_personal')->where('emp_id', '=', $id )->get();
		return View::make('qualification/personnel')
		->with('PageName','Personnel')
		->with('dates',$dates)
		->with('months',$months)
		->with('years',$years)
		->with('infos',$query);
	}
	public function education()
	{	
		$years=$this->years();
		$id = Auth::user()->emp_id();
		$query1=DB::table('qualification_edu_accademic')->where('emp_id', '=', $id)->get();
		$query2=DB::table('qualification_edu_thesis')->where('emp_id', '=', $id)->get();
		return View::make('qualification/education')
		->with('PageName','Education')
		->with('a_sl','0')
		->with('t_sl','0')
		->with('year',$years)
		->with('accas',$query1)
		->with('thesis',$query2)
		;
	}
	public function employment()
	{
		$id = Auth::user()->emp_id();
		$dates=$this->dates();
		$months=$this->months();
		$years=$this->years();
		$query=DB::table('qualification_emplyment')->where('emp_id', '=', $id)->get();
		
		return View::make('qualification/employment')
		->with('PageName','employment')
		->with('a_sl','0')
		->with('dates',$dates)
		->with('months',$months)
		->with('years',$years)
		->with('infos',$query)
		;
	}
	public function pro_degree()
	{	
		$id = Auth::user()->emp_id();
		$dates=$this->dates();
		$months=$this->months();
		$years=$this->years();
		$query=DB::table('qualification_pro_degree')->where('emp_id', '=', $id)->get();
		
		return View::make('qualification/pro_degree')
		->with('PageName','pro_degree')
		->with('a_sl','0')
		->with('year',$years)
		->with('infos',$query)
		;
	}
	public function taining_work_ojt()
	{
		$id = Auth::user()->emp_id();
		$query=DB::table('qualification_training_ojt')->where('emp_id', '=', $id)->get();
		return View::make('qualification/taining_work_ojt')
		->with('PageName','Training/ Workshop/ OJT')
		->with('a_sl','0')
		->with('infos',$query)		
		;
	}
	public function language()
	{
		$id = Auth::user()->emp_id();
		$query=DB::table('qualification_language')->where('emp_id', '=', $id)->get();
		return View::make('qualification/language')
		->with('PageName','Language')
		->with('a_sl','0')
		->with('infos',$query)	
		;
	}
	public function technical_licence()
	{
		$dates=$this->dates();
		$months=$this->months();
		$years=$this->years();
		
		$id = Auth::user()->emp_id();
		$query=DB::table('qualification_technical_licence')->where('emp_id', '=', $id)->get();
		
		return View::make('qualification/technical_licence')
		->with('PageName','Technical Licence')
		->with('a_sl','0')
		->with('dates',$dates)
		->with('months',$months)
		->with('years',$years)
		->with('infos',$query)	
		;
	}
	public function aircraft_qualification()
	{
		$dates=$this->dates();
		$months=$this->months();
		$years=$this->years();
		
		$id = Auth::user()->emp_id();
		$query=DB::table('qualification_aircraft')->where('emp_id', '=', $id)->get();
		
		return View::make('qualification/aircraft_qualification')
				->with('PageName','Aircraft Qualification')
				->with('a_sl','0')
				->with('dates',$dates)
				->with('months',$months)
				->with('years',$years)
				->with('infos',$query)	
				;
	}
	public function reference()
	{	
		$id = Auth::user()->emp_id();
		$query=DB::table('qualification_reference')->where('emp_id', '=', $id)->get();
		return View::make('qualification/reference')
		->with('PageName','Reference')
		->with('a_sl','0')
		->with('infos',$query)	
		;
	}
	public function emp_verification()
	{
		$dates=$this->dates();
		$months=$this->months();
		$years=$this->years();
		
		$id = Auth::user()->emp_id();
		$query=DB::table('qualification_employee_verification')->where('emp_id', '=', $id)->get();
		
		return View::make('qualification/emp_verification')
		->with('PageName','Employee Verification')
		->with('a_sl','0')
		->with('dates',$dates)
		->with('months',$months)
		->with('years',$years)
		->with('infos',$query)	
		
		;
	}
	public function other()
	{
		$id = Auth::user()->emp_id();
		$query1=DB::table('qualification_others_publication')->where('emp_id', '=', $id)->get();
		$query2=DB::table('qualification_others_membership')->where('emp_id', '=', $id)->get();
		
		return View::make('qualification/other')
		->with('PageName','other')
		->with('a_sl','0')
		->with('t_sl','0')
		->with('pubs',$query1)
		->with('membs',$query2);
	}
	
	//Insert data
	public function savePersonnel(){		
		//image upload
		if($file = Input::file('photo')){
		$destinationPath = 'img/PersonnelPhoto';
		//$filename = $file->getClientOriginalName();
		$filename = time().'_'.Auth::user()->emp_id().'.'.$file->getClientOriginalExtension();
		$upload_success = Input::file('photo')->move($destinationPath, $filename);
		}
		else{
			$filename='Null';
		}
		//image upload end  
		
		DB::table('qualification_personal')->insert(array(
		'emp_id' => Auth::user()->emp_id(),
		'title' => Input::get('title'),
		'first_name' => Input::get('first_name'),
		'middle_name' =>Input::get('middle_name') ,
		'last_name' => Input::get('last_name'),
		'mother_name' => Input::get('mother_name'),
		'father_name' => Input::get('father_name'),
		'mailing_address' => Input::get('mailing_address'),
		'parmanent_address' => Input::get('parmanent_address'),
		'telephone_work' => Input::get('telephone_work'),
		'telephone_residence' => Input::get('telephone_residence'),
		'mobile_no' => Input::get('mobile_no'),
		'nationality' => Input::get('nationality'),
		'national_id' => Input::get('national_id'),
		'sex' => Input::get('sex'),
		'blood_group' => Input::get('blood_group'),
		'date_of_birth' => Input::get('date_of_birth'),
		'month_of_birth' => Input::get('month_of_birth'),
		'year_of_birth' => Input::get('year_of_birth'),
		'photo' =>$filename,
		'created_at' => time(),
		'updated_at' =>time()		
		));
			
		return Redirect::to('qualification/personnel')->with('message', 'Successfully Saved!!');
		
	}
	public function editPersonnel(){
		
		$old_photo=Input::get('old_photo');
		//image upload
		if($file = Input::file('photo')){
		$destinationPath = 'img/PersonnelPhoto';
		//$filename = $file->getClientOriginalName();
		$filename = time().'_'.Auth::user()->getId().'.'.$file->getClientOriginalExtension();
		$upload_success = Input::file('photo')->move($destinationPath, $filename);
		File::delete('img/PersonnelPhoto/'.$old_photo);
		}
		else{
			$filename=$old_photo;
		}
		//image upload end  
		//get the row id form hidden field
		$id= Input::get('id');
		
		DB::table('qualification_personal')
            ->where('id', $id)
            ->update(array(
			
		'title' => Input::get('title'),
		'first_name' => Input::get('first_name'),
		'middle_name' =>Input::get('middle_name') ,
		'last_name' => Input::get('last_name'),
		'mother_name' => Input::get('mother_name'),
		'father_name' => Input::get('father_name'),
		'mailing_address' => Input::get('mailing_address'),
		'parmanent_address' => Input::get('parmanent_address'),
		'telephone_work' => Input::get('telephone_work'),
		'telephone_residence' => Input::get('telephone_residence'),
		'mobile_no' => Input::get('mobile_no'),
		'nationality' => Input::get('nationality'),
		'national_id' => Input::get('national_id'),
		'sex' => Input::get('sex'),
		'blood_group' => Input::get('blood_group'),
		'date_of_birth' => Input::get('date_of_birth'),
		'month_of_birth' => Input::get('month_of_birth'),
		'year_of_birth' => Input::get('year_of_birth'),
		'photo' =>$filename,
		
		'updated_at' =>time()	
			
			
			));
			
			return Redirect::to('qualification/personnel')->with('message', 'Successfully Saved!!');
	}

	public function saveAccademic(){
		DB::table('qualification_edu_accademic')->insert(array(
		'emp_id' => Auth::user()->emp_id(),
		'level' => Input::get('level'),
		'name_of_degree' => Input::get('name_of_degree'),
		'discipline' =>Input::get('discipline') ,
		'specialization' => Input::get('specialization'),
		'institute' => Input::get('institute'),
		'pussing_year' => Input::get('pussing_year'),
		'standard' => Input::get('standard'),
		'grade_division' => Input::get('grade_division'),
		'out_of' => Input::get('out_of',false),		
		'created_at' => time(),
		'updated_at' =>time()		
		));
			
		return Redirect::to('qualification/education')->with('message', 'Successfully Saved!!');
	}
	public function saveThesis(){
		
		DB::table('qualification_edu_thesis')->insert(array(
		'emp_id' => Auth::user()->emp_id(),
		'level' => Input::get('level'),
		'type' => Input::get('type'),
		'title' => Input::get('title'),
		'institute' =>Input::get('institute') ,
		'duration' => Input::get('duration'),	
		'created_at' => time(),
		'updated_at' =>time()		
		));
		return Redirect::to('qualification/education')->with('message', 'Successfully Saved!!');
	}
	public function saveEmployment(){
		
		DB::table('qualification_emplyment')->insert(array(
		'emp_id' => Auth::user()->emp_id(),
		'organisation_name' => Input::get('organisation_name'),
		'organisation_type' => Input::get('organisation_type'),
		'organisation_address' => Input::get('organisation_address'),
		'designation' =>Input::get('designation') ,
		'responsibility' => Input::get('responsibility'),	
		'start_date' => Input::get('start_date'),	
		'start_month' => Input::get('start_month'),	
		'start_year' => Input::get('start_year'),
		'end_date' => Input::get('end_date'),	
		'end_month' => Input::get('end_month'),	
		'end_year' => Input::get('end_year'),	
		'supervisor_name' => Input::get('supervisor_name'),	
		'supervisor_phone' => Input::get('supervisor_phone'),	
		'created_at' => time(),
		'updated_at' =>time()		
		));
		return Redirect::to('qualification/employment')->with('message', 'Successfully Saved!!');
	}
   public function proDegree(){
	
	DB::table('qualification_pro_degree')->insert(array(
		'emp_id' => Auth::user()->emp_id(),
		'pro_degree_name' => Input::get('pro_degree_name'),
		'pro_degree_institute' => Input::get('pro_degree_institute'),
		'pro_degree_duration' => Input::get('pro_degree_duration'),
		'pro_degree_grade' =>Input::get('pro_degree_grade') ,
		'pro_degree_major_area' => Input::get('pro_degree_major_area'),	
		
		'pro_degree_year' => Input::get('pro_degree_year'),	
		'created_at' => time(),
		'updated_at' =>time()		
		));
	   return Redirect::to('qualification/pro_degree')->with('message', 'Successfully Saved!!');
   }
   
   public function saveTrainingWorkOJT(){
	   //pdf upload
		if($file = Input::file('pdf')){
		$destinationPath = 'files/TrainingWorkshopOJT';
		//$filename = $file->getClientOriginalName();
		$filename = time().'_'.Auth::user()->emp_id().'.'.$file->getClientOriginalExtension();
		$upload_success = Input::file('pdf')->move($destinationPath, $filename);
		}
		else{
			$filename='Null';
		}
		//pdf upload end  
		DB::table('qualification_training_ojt')->insert(array(
		'emp_id' => Auth::user()->emp_id(),
		'category' => Input::get('category'),
		//training
		'type_of_training' => Input::get('type_of_training'),
		'training_course' => Input::get('training_course'),
		'subject' => Input::get('subject'),
		//ojt
		'training_task' => Input::get('training_task'),
		//workshop
		'topic' => Input::get('topic'),		
		
		'major_area' => Input::get('major_area'),
		'instructor' => Input::get('instructor'),
		'institute' =>Input::get('institute') ,
		'location' => Input::get('location'),			
		'proof' => Input::get('proof'),	
		'certification' => Input::get('certification'),	
		'pdf' => $filename,	
		'duration' => Input::get('duration'),			
		'created_at' => time(),
		'updated_at' =>time()		
		));
	    return Redirect::to('qualification/taining_work_ojt')->with('message', 'Successfully Saved!!');
   }
   public function saveLanguage(){
	   DB::table('qualification_language')->insert(array(
	   'emp_id' => Auth::user()->emp_id(),
	  // 'mother_tounge' =>Input::get('mother_tounge'),
	   'language' =>Input::get('language'),
	   'lang_speak' =>Input::get('lang_speak'),
	   'lang_understanding' =>Input::get('lang_understanding'),
	   'lang_reading' =>Input::get('lang_reading'),
	   'lang_writing' =>Input::get('lang_writing'),	   
	   'created_at' => time(),
	   'updated_at' =>time()	
	   ));
	   return Redirect::to('qualification/language')->with('message', 'Successfully Saved!!');
   }
   public function saveTechnicalLicence(){
	 
	   DB::table('qualification_technical_licence')->insert(array(
	   'emp_id' => Auth::user()->emp_id(),
	   'active' =>Input::get('active'),
	   'licence_no' =>Input::get('licence_no'),
	   'licence_type' =>Input::get('licence_type'),
	   'issue_date' =>Input::get('issue_date'),
	   'issue_month' =>Input::get('issue_month'),
	   'issue_year' =>Input::get('issue_year'),
	   'expiration_date' =>Input::get('expiration_date'),	   
	   'expiration_month' =>Input::get('expiration_month'),	   
	   'expiration_year' =>Input::get('expiration_year'),	   
	   'rating' =>Input::get('rating'),	   
	   'created_at' => time(),
	   'updated_at' =>time()	
	   ));
	   return Redirect::to('qualification/technical_licence')->with('message', 'Successfully Saved!!');
   }
   public function saveAircraftQualification(){
	  
	     //pdf upload
		if($file = Input::file('pdf')){
		$destinationPath = 'files/AircraftQualification';
		$filename = time().'_'.Auth::user()->emp_id().'.'.$file->getClientOriginalExtension();
		$upload_success = Input::file('pdf')->move($destinationPath, $filename);
		}
		else{
			$filename='Null';
		}
		//pdf upload end 
		
		DB::table('qualification_aircraft')->insert(array(
	   'emp_id' => Auth::user()->emp_id(),
	   'active' =>Input::get('active'),
	   'qualification_type' =>Input::get('qualification_type'),
	   'total_hours' =>Input::get('total_hours'),
	   'aircraft_mm' =>Input::get('aircraft_mm'),
	   'aircraft_msm' =>Input::get('aircraft_msm'),
	   'completion_date' =>Input::get('completion_date'),
	   'completion_month' =>Input::get('completion_month'),	   
	   'completion_year' =>Input::get('completion_year'),	   
	   'status' =>Input::get('status'),	   
	   'institute' =>Input::get('institute'),	  
	   'instructor' =>Input::get('instructor'),	  
	   'proof' =>Input::get('proof'),	  
	   'pdf' =>$filename,	  
	   'certification' =>Input::get('certification'),	  
	   'created_at' => time(),
	   'updated_at' =>time()	
	   ));
	   return Redirect::to('qualification/aircraft_qualification')->with('message', 'Successfully Saved!!');
   }
   public function saveReference(){
	  
	   DB::table('qualification_reference')->insert(array(
	   'emp_id' => Auth::user()->emp_id(),
	   'referee_type' =>Input::get('referee_type'),
	   'name' =>Input::get('name'),
	   'designation' =>Input::get('designation'),
	   'address' =>Input::get('address'),
	   'telephone' =>Input::get('telephone'),
	   'years_acquainted' =>Input::get('years_acquainted'),
	   'email_address' =>Input::get('email_address'),	   
	   //'completion_year' =>Input::get('completion_year'),	   
	   'may_we_request' =>Input::get('may_we_request'), 
	   //'certification' =>Input::get('certification'),	  
	   'created_at' => time(),
	   'updated_at' =>time()	
	   ));
	   return Redirect::to('qualification/reference')->with('message', 'Successfully Saved!!');
   }
   public function EmpVerification(){
	  
	    DB::table('qualification_employee_verification')->insert(array(
	   'emp_id' => Auth::user()->emp_id(),
	   'name' =>Input::get('name'),
	   'entry_date' =>Input::get('entry_date'),
	   'entry_month' =>Input::get('entry_month'),
	   'entry_year' =>Input::get('entry_year'),
	   'active' =>Input::get('active'),
	   'termination_date' =>Input::get('termination_date'),
	   'termination_month' =>Input::get('termination_month'),
	   'termination_year' =>Input::get('termination_year'),
	   'position' =>Input::get('position'),
	   'note' =>Input::get('note'),	     
	   'created_at' => time(),
	   'updated_at' =>time()	
	   ));
	  return Redirect::to('qualification/emp_verification')->with('message', 'Successfully Saved!!');
   }
   public function savePublication(){
	   DB::table('qualification_others_publication')->insert(array(
	   'emp_id' => Auth::user()->emp_id(),
	   'title' =>Input::get('title'),
	   'description' =>Input::get('description'),     
	   'created_at' => time(),
	   'updated_at' =>time()	
	   ));
	  return Redirect::to('qualification/other')->with('message', 'Successfully Saved!!');
   } 
   public function saveMembership(){
	   DB::table('qualification_others_membership')->insert(array(
	   'emp_id' => Auth::user()->emp_id(),
	   'title' =>Input::get('title'),
	   'description' =>Input::get('description'),     
	   'created_at' => time(),
	   'updated_at' =>time()	
	   ));
	  return Redirect::to('qualification/other')->with('message', 'Successfully Saved!!');
   }
	
}
