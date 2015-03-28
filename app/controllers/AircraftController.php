<?php

class AircraftController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /aircraft
	 *
	 * @return Response
	 */
	public function main()
	{
		return View::make('aircraft/main')
		->with('PageName','Aircraft')
		->with('personnel', parent::getPersonnelInfo())
		->with('dates',parent::dates())
		->with('months',parent::months())
		->with('years',parent::years())
		;
	}
	public function savePrimary(){		
		$aircraft=new AircraftPrimary;
		$aircraft->serial_number=Input::get('serial_number');
		$aircraft->registration_no=Input::get('registration_no');
		$aircraft->aircraft_MM=Input::get('aircraft_MM');
		$aircraft->aircraft_MSN=Input::get('aircraft_MSN');
		$aircraft->aircraft_operator=Input::get('aircraft_operator');
		$aircraft->active=Input::get('active');
		$aircraft->registration=Input::get('registration',false);
		$aircraft->cofa=Input::get('cofa',false);
		$aircraft->stcs=Input::get('stcs',false);
		$aircraft->current_exemptions=Input::get('current_exemptions',false);
		$aircraft->insurance=Input::get('insurance',false);
		$aircraft->currently_leased=Input::get('currently_leased',false);
		$aircraft->memo=Input::get('memo');
		$aircraft->save();
		
		return Redirect::to('aircraft/single/'.Input::get('aircraft_MM').'/'.Input::get('aircraft_MSN'));
		
		
	}
	public function aircraftSingle($mm,$msn){
		$infos=DB::table('aircrafts_primary')
                    ->where('aircraft_MM', '=',$mm)
                    ->where('aircraft_MSN', '=',$msn)                    
                    ->get();
		return View::make('aircraft/aircraft-single')
		->with('PageName','Aircraft Info.')
		->with('personnel', parent::getPersonnelInfo())
		->with('dates',parent::dates())
		->with('months',parent::months())
		->with('years',parent::years())
		->with('infos',$infos)
		->with('ND',0)
		
		;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /aircraft/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /aircraft
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /aircraft/{id}
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
	 * GET /aircraft/{id}/edit
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
	 * PUT /aircraft/{id}
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
	 * DELETE /aircraft/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}