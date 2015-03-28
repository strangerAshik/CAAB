{{--
Page Description:
aircraft landing page, 
--}}
@extends('layout')
@section('content')

<section class='content' >

    <div class="row" style='margin:0px 0px 0px 0px;;'>
                      
						
						<div class="row">
						
                        <div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
                            <!-- small box -->
						<div class="small-box bg-aqua " >
							<div class="inner">
								<h4 style='font-weight:bold;'>Air Craft List</h4>
							</div>
							
							<a class="small-box-footer" href="{{--URL::to('aircraft/list');--}}">
								More info <i class="fa fa-arrow-circle-right"></i>
							</a>
						</div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-green " >
                                <div class="inner">
                                    <h4 style='font-weight:bold;'>New Entry</h4>
                                    
                                </div>
                              
                                <a class="small-box-footer" href="#" data-toggle="modal" data-target="#addNew">
                                    Add New <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-yellow " >
                                <div class="inner">
                                   <h4 style='font-weight:bold;'>Report</h4>
                                   
                                </div>
                           
                                <a class="small-box-footer" href="{{--URL::to('aircraft/report')--}}">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                       
                    </div>
	</div>
	{{--POP UP NEW ENTRY--}}
	<div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Primary Data Of A New Aircraft</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                
				{{Form::open(array('url'=>'aircraft/savePrimary','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}

					<div class="form-group required">
                                           
											{{Form::label('serial_number', 'Serial Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('serial_number','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                           
											{{Form::label('registration_no', 'Registration No#', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('registration_no','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('aircraft_MM', 'Aircraft MM', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('aircraft_MM','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
		<div class="form-group required">
                                        
											{{Form::label('aircraft_MSN', 'Aircraft MSN', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('aircraft_MSN','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					
					<div class="form-group ">
                                           
											{{Form::label('aircraft_operator', 'Aircraft Operator', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('aircraft_operator','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                           
											{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
										<div class="radio">
									 
									  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
									 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
									</div>
									
								</div>
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('registration', 'Registration ?', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
										<div class="radio">
									 
									  <label> <label> {{ Form::radio('registration', 'Yes') }} &nbsp  Yes</label>
									 <label> {{ Form::radio('registration', 'No') }} &nbsp  No</label>
									</div>
									
								</div>
                    </div>
					
					<div class="form-group ">
                                           
											{{Form::label('cofa', 'CofA?', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
										<div class="radio">
									 
									  <label> <label> {{ Form::radio('cofa', 'Yes') }} &nbsp  Yes</label>
									 <label> {{ Form::radio('cofa', 'No') }} &nbsp  No</label>
									</div>
									
								</div>
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('stcs', 'STCs?', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
										<div class="radio">
									 
									  <label> <label> {{ Form::radio('stcs', 'Yes') }} &nbsp  Yes</label>
									 <label> {{ Form::radio('stcs', 'No') }} &nbsp  No</label>
									</div>
									
								</div>
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('current_exemptions', 'Current Exemptions?', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
										<div class="radio">
									 
									  <label> <label> {{ Form::radio('current_exemptions', 'Yes') }} &nbsp  Yes</label>
									 <label> {{ Form::radio('current_exemptions', 'No') }} &nbsp  No</label>
									</div>
									
								</div>
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('insurance', 'Insurance?', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
										<div class="radio">
									 
									  <label> <label> {{ Form::radio('insurance', 'Yes') }} &nbsp  Yes</label>
									 <label> {{ Form::radio('insurance', 'No') }} &nbsp  No</label>
									</div>
									
								</div>
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('currently_leased', 'Currently Leased?', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
										<div class="radio">
									 
									  <label> <label> {{ Form::radio('currently_leased', 'Yes') }} &nbsp  Yes</label>
									 <label> {{ Form::radio('currently_leased', 'No') }} &nbsp  No</label>
									</div>
									
								</div>
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('memo', 'Memo', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('memo','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
					
					

                    {{-- <div class="form-group">
                       
                            <button type="submit" name='saveOnly' value='saveOnly' class="btn btn-primary btn-lg btn-block">Save Only</button>
                       
                    </div>
					<div style="margin: 9px;text-align:center; font-weight:bold;">
						OR
					</div> --}}
					<div class="form-group">
                       
                            <button type="submit" name='saveAndContinue' value='saveAndContinue' class="btn btn-primary btn-lg btn-block">Save And Continue</button>
                       
                    </div>
					
					{{Form::close()}}
            </div>
        </div>
    </div>
</div>
	{{--END POP UP NEW ENTRY--}}
</section>
@stop