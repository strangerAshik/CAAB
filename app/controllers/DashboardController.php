<?php

class DashboardController extends \BaseController {

	public function years(){
		$years['']='Year';
		for($i =date('Y'); $i >=1971; $i--){$years[$i] = $i;} return $years;
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
		//if(Auth::basic()){
		$id = Auth::user()->emp_id();
		$query=DB::table('qualification_personal')->where('emp_id', '=', $id )->get();
		return $query;
	//	}
	//	else Auth::basic();
	}
	public function index(){
		return View::make('dashboard')
		->with('PageName','Dashboard')
		->with('personnel',$this->getPersonnelInfo());
	}

}