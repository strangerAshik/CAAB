@extends('layout')
@section('content')
<div class='content' style="max-width:760px;margin:0 auto;">
<div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Open Safety Concerns</h3>
                </div>
            	<div class="box-body">
				
                    <table class="table table-bordered">
                        <tbody>
                            
                            <tr>
                                <td class='col-md-4'>High Risk Issue('s)</td>
                                <td class='col-md-2'>{{$OH}}</td>
                            </tr>
                            <tr>
                                <td>Medium Risk Issue('s)</td>
                                <td>{{$OM}}</td>
                            </tr>
                            <tr>
                                <td>Low Risk Issue('s)</td>
                                <td>{{$OL}}</td>
                            </tr>
							<tr>
                                <td>No Risk Issue('s)</td>
                                <td>{{$ON}}</td>
                            </tr>
                          </tbody>
                    </table>
					
                </div>
                <!-- /.box-body -->
            </div>
        </div>
		<div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">In Progress Safety Concerns</h3>
                </div>
            	<div class="box-body">
				
                    <table class="table table-bordered">
                        <tbody>
                            
                            <tr>
                                <td class='col-md-4'>High Risk Issue('s)</td>
                                <td class='col-md-2'>{{$AH}}</td>
                            </tr>
                            <tr>
                                <td>Medium Risk Issue('s)</td>
                                <td>{{$AM}}</td>
                            </tr>
                            <tr>
                                <td>Low Risk Issue('s)</td>
                                <td>{{$AL}}</td>
                            </tr>
							<tr>
                                <td>No Risk Issue('s)</td>
                                <td>{{$AN}}</td>
                            </tr>
                          </tbody>
                    </table>
					
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>


<p class="text-center">
    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#safety">Entry A Safety Concern</button>
	
</p>
</div>
<!-- start of oppup content-->
<div class="modal fade" id="safety" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Entry A Safety Concern</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
               
				{{Form::open(array('url' => 'safety/safetyConcern/save', 'method' => 'post',  'class'=>'form-horizontal','data-toggle'=>'validator', 'role'=>'form'))}}
						@if (Auth::check())						
							   {{Form::hidden('user_id',Auth::user()->id)}}							
						@endif
					{{Form::hidden('receipt_date',$toDay)}}
					<div class="form-group ">
                                        
											{{Form::label('assigned_inspector', 'Assigned Inspector', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('assigned_inspector', array('Null' => '--Select--', 'Mr.X' => 'Mr.X','Mr.Y'=>'Mr.Y'), 0,array('class'=>'form-control','id'=>'category'))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('corrective_status', 'Corrective Status', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('corrective_status', array('' => '--Select--', 'R-Resolved' => 'R-Resolved','R-Open'=>'R-Open','X-Cancelled'=>'X-Cancelled','A-All Ready In Progress'=>'A-All Ready In Progress'), 0,array('class'=>'form-control','id'=>'category','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('initial_risk_analysis', 'Initial Risk Analysis', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('initial_risk_analysis', array('' => '--Select--', 'H-High Risk' => 'H-High Risk','M-Medium Risk'=>'M-Medium Risk','L-Low Risk'=>'L-Low Risk','N-No Risk'=>'N-No Risk'), 0,array('class'=>'form-control','id'=>'category','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('type_of_issue', 'Type Of Issue', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('type_of_issue', array('' => '--Select--', 
										'A=Non-Conformance: State Law' => 'A=Non-Conformance: State Law',
										'B=Non-Conformance: State Regulations'=>'B=Non-Conformance: State Regulations','C=Non-Adherence: Published Standard'=>'C=Non-Adherence: Published Standard','D=Non-Adherence: Relevant Safety Practice'=>'D=Non-Adherence: Relevant Safety Practice','E=Non-Adherence: CAA Guidance'=>'E=Non-Adherence: CAA Guidance','F=Non-Conformance: ICAO Standard'=>'F=Non-Conformance: ICAO Standard','G=Inadequate System Function'=>'G=Inadequate System Function','I=Initial Investigation'=>'I=Initial Investigation'), 0,array('class'=>'form-control','id'=>'category','required'=>''))}}
											</div>
											
                    </div>
					
				
					<div class="form-group ">
                                        
											{{Form::label('published_practice', 'Published Practice', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('published_practice','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('regulation', 'Regulation', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('regulation','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('job_aid', 'Job Aid', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('job_aid','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('questions', 'Questions', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('questions','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('organization', 'Organization', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('organization', array('' => '--Select--'), 0,array('class'=>'form-control','id'=>'category'))}}
											</div>
											
                    </div>
					
					<div class="form-group ">
                                        
											{{Form::label('aircraft_registration', 'Aircraft Registration', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('aircraft_registration','', array('class' => 'form-control','placeholder'=>'',))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('pel_number', 'PEL Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('pel_number','', array('class' => 'form-control','placeholder'=>'',))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('provided_to', 'Provided To', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('provided_to','', array('class' => 'form-control','placeholder'=>'',))}}
											</div>
											
                    </div>
					
					
					<div class="form-group required">
                                        
											{{Form::label('curative_priority', 'Curative Priority ', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('curative_priority', array('' => '--Select--','0=Safety of Flight Concern'=>'0=Safety of Flight Concern','1=Needs Priority Correction'=>'1=Needs Priority Correction','2=Needs Corrective Action'=>'2=Needs Corrective Action','3=Inspector Observation'=>'3=Inspector Observation'), 0,array('class'=>'form-control','id'=>'category','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
												
													{{Form::label('target_date', 'Target Date', array('class' => 'col-xs-4 control-label'))}}
												
													<div class="row">
														<div class="col-xs-2">
														{{Form::select('target_date',$dates,'0',array('class'=>'form-control'))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('target_month',$months,'0',array('class'=>'form-control'))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('target_year',$year,'01',array('class'=>'form-control'))}}
														</div>
													</div>
					</div>
					<div class="form-group">
												
													{{Form::label('eir', 'EIR#', array('class' => 'col-xs-4 control-label'))}}
												
													<div class="col-xs-6">			
														
														{{Form::text('eir','Not Applicable', array('class' => 'form-control','placeholder'=>''))}}
													</div>
														
					</div>
					<div class="form-group ">
												
													{{Form::label('final_res_date', 'Final Res Date', array('class' => 'col-xs-4 control-label'))}}
												
													<div class="row">
														<div class="col-xs-2">
														{{Form::select('final_res_date',$dates,'0',array('class'=>'form-control'))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('final_res_month',$months,'0',array('class'=>'form-control'))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('final_res_year',$year,'01',array('class'=>'form-control'))}}
														</div>
													</div>
					</div>
					<div class="form-group ">
                                        
											{{Form::label('final_res_inspector', 'Final Res Inspector', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('final_res_inspector', array('' => '--Select--'), 0,array('class'=>'form-control','id'=>'category'))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('final_res_method', 'Final Res Method', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('final_res_method', array('' => '--Select--'), 0,array('class'=>'form-control','id'=>'category'))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('residual_risk', 'Residual Risk', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('residual_risk', array('' => '--Select--'), 0,array('class'=>'form-control','id'=>'category'))}}
											</div>
											
                    </div>
					
					<div class="form-group required">											
											{{Form::label('safety_concern', 'Safety Concern', array('class' => 'control-label col-xs-4'))}}
											<div class="col-xs-6">
											{{Form::textarea('safety_concern','', array('class' => 'form-control','placeholder'=>'','size'=>'30x3','required'=>''))}}
											 </div>
										</div>
					
					
                    

                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                       
                    </div>
					{{Form::close()}}
            </div>
        </div>
    </div>
	</div>
	</div>
@stop