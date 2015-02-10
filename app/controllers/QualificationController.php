<?php

class QualificationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	public function personnel()
	{
		$id = Auth::user()->emp_id();
		$query=DB::table('qualification_personal')->where('emp_id', '=', $id)->get();
		return View::make('qualification/personnel')
		->with('PageName','personnel')
		->with('infos',$query);
	}
	public function education()
	{
		return View::make('qualification/education')->with('PageName','education');
	}
	public function employment()
	{
		return View::make('qualification/employment')->with('PageName','employment');
	}
	public function pro_degree()
	{
		return View::make('qualification/pro_degree')->with('PageName','pro_degree');
	}
	public function taining_work_ojt()
	{
		return View::make('qualification/taining_work_ojt')->with('PageName','taining_work_ojt');
	}
	public function language()
	{
		return View::make('qualification/language')->with('PageName','language');
	}
	public function technical_licence()
	{
		return View::make('qualification/technical_licence')->with('PageName','technical_licence');
	}
	public function aircraft_qualification()
	{
		return View::make('qualification/aircraft_qualification')->with('PageName','aircraft_qualification');
	}
	public function reference()
	{
		return View::make('qualification/reference')->with('PageName','reference');
	}
	public function emp_verification()
	{
		return View::make('qualification/emp_verification')->with('PageName','emp_verification');
	}
	public function other()
	{
		return View::make('qualification/other')->with('PageName','other');
	}
	
	//Insert data
	public function savePersonnel(){
		
		//image upload
		if($file = Input::file('photo')){
		$destinationPath = 'img/PersonnelPhoto';
		//$filename = $file->getClientOriginalName();
		$filename = time().'_'.Auth::user()->getId().'.'.$file->getClientOriginalExtension();
		$upload_success = Input::file('photo')->move($destinationPath, $filename);
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


}
