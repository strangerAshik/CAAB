<?php

class DocController extends \BaseController {
//Default Start 
	public function years(){
		$years['']='Year';
		$j=2017;
		for($i =date('Y'); $i <=$j; $i++){$years[$i] = $i;} return $years;
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
	private function getPersonnelInfo(){
		$id = Auth::user()->emp_id();
		$query=DB::table('qualification_personal')->where('emp_id', '=', $id )->get();
		return $query;
	}
	//Default End 
	public function entry(){
		$today=date("d F Y");
		$dates=$this->dates();
		$months=$this->months();
		$years=$this->years();		
		$id = Auth::user()->emp_id();
		return View::make('documentControl/entry')
		->with('PageName','Document Entry')
		->with('dates',$dates)
		->with('toDay',$today)
		->with('months',$months)
		->with('year',$years)
		->with('personnel',$this->getPersonnelInfo());
		
	}public function listView(){
		$today=date("d F Y");
		$dates=$this->dates();
		$months=$this->months();
		$years=$this->years();		
		
		//query 
		$queryAll=DB::table('document_controllers')->orderBy('id', 'desc')->get();
		$queryActive=DB::table('document_controllers')
		->where('active','Yes')
		->orderBy('id', 'desc')->get();
		$queryInactive=DB::table('document_controllers')
		->where('active','No')
		->orderBy('id', 'desc')->get();
		
		return View::make('documentControl/listView')
		->with('PageName','Document List')
		->with('dates',$dates)
		->with('toDay',$today)
		->with('months',$months)
		->with('year',$years)
		->with('infos',$queryAll)
		->with('actives',$queryActive)
		->with('inactives',$queryInactive)
		->with('personnel',$this->getPersonnelInfo());
		
	}
	public function save(){
		//pdf upload
		if($file = Input::file('pdf')){
		$destinationPath = 'files/Document';
		//$filename = $file->getClientOriginalName();
		$filename = time().'_'.Auth::user()->emp_id().'.'.$file->getClientOriginalExtension();
		$upload_success = Input::file('pdf')->move($destinationPath, $filename);
		}
		else{
			$filename='Null';
		}
		
		DB::table('document_controllers')->insert(array(
		'user_id' => Input::get('user_id'),
		'active' => Input::get('active'),
		'record_id' => Input::get('record_id'),
		'control_number' => Input::get('control_number'),
		'safety_issue' => Input::get('safety_issue'),
		'document_date' => Input::get('document_date'),
		'document_month' => Input::get('document_month'),
		'document_year' => Input::get('document_year'),
		'document_type' => Input::get('document_type'),
		'technical_area' => Input::get('technical_area'),
		'signed_by' => Input::get('signed_by'),
		'inspector' => Input::get('inspector'),
		'organization' => Input::get('organization'),
		'project_number' => Input::get('project_number'),
		
		'aircraft_registration' => Input::get('aircraft_registration'),
		'pel_number' => Input::get('pel_number'),
		'employee_id' => Input::get('employee_id'),
		'investigation_number' => Input::get('investigation_number'),
		'subject' => Input::get('subject'),
		'summary_or_keyword' => Input::get('summary_or_keyword'),
		
		'pdf' =>$filename,
		
		'created_at' => time(),
		'updated_at' =>time()		
		));
			
		return Redirect::to('doc/entry')->with('message', 'Successfully Saved!!');
	}
	public function update(){
		//pdf upload
		$old_file=Input::get('old_file');
		if($file = Input::file('pdf')){
		$destinationPath = 'files/Document';
		//$filename = $file->getClientOriginalName();
		$filename = time().'_'.Auth::user()->emp_id().'.'.$file->getClientOriginalExtension();
		$upload_success = Input::file('pdf')->move($destinationPath, $filename);
		File::delete('files/Document/'.$old_file);
		}
		else{
			$filename=$old_file;
		}
		//pdf upload end  
		$id=Input::get('id');
		DB::table('document_controllers') 
		->where('id',$id)
        ->update(array(
		'user_id' => Input::get('user_id'),
		'active' => Input::get('active'),
		'record_id' => Input::get('record_id'),
		'control_number' => Input::get('control_number'),
		'safety_issue' => Input::get('safety_issue'),
		'document_date' => Input::get('document_date'),
		'document_month' => Input::get('document_month'),
		'document_year' => Input::get('document_year'),
		'document_type' => Input::get('document_type'),
		'technical_area' => Input::get('technical_area'),
		'signed_by' => Input::get('signed_by'),
		'inspector' => Input::get('inspector'),
		'organization' => Input::get('organization'),
		'project_number' => Input::get('project_number'),
		
		'aircraft_registration' => Input::get('aircraft_registration'),
		'pel_number' => Input::get('pel_number'),
		'employee_id' => Input::get('employee_id'),
		'investigation_number' => Input::get('investigation_number'),
		'subject' => Input::get('subject'),
		'summary_or_keyword' => Input::get('summary_or_keyword'),
		
		'pdf' =>$filename,
		
		'updated_at' =>time()		
		));
			
		return Redirect::to('doc/listView')->with('message', 'Successfully Saved!!');
	}

}