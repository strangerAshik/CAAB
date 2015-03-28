@extends('layout')
@section('content')

<section class="content" style="max-width:900px;margin:0 auto;">
{{--Aircraft Primary Information--}}
 <div class="row" style="">
                        
		  @foreach($infos as $info)
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary ">
							 <div class="box-header col-md-6">
									<h3 class="box-title">Aircraft Primary Information</h3>
							  </div>
							  <div class='col-md-6'>
							   <a href="{{'deletePersonnel/'.$info->id}}" style='color:red;float:right;padding:5px;'>
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                    <a data-toggle="modal" data-target="#{{$info->id}}" href='' style='color:green;float:right;padding:5px;'>
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
							  </div>
                <!-- /.box-header -->
				
					<div class="box-body">
					
                    <table class="table table-bordered">
                        <tbody>
                         
                            <tr>
                                <td class="col-md-3">									
									Serial Number
								</td>
                                <td>{{$info->serial_number}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Registration No#
								</td>
                                <td>{{$info->registration_no}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Aircraft MM
								</td>
                                <td>{{$info->aircraft_MM}}  </td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Aircraft MSN
								</td>
                                <td>{{$info->aircraft_MSN}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Aircraft Operator
								</td>
                                <td>{{$info->aircraft_operator}}</td>
                            </tr>
                            
                            <tr>
                                <td class="col-md-3">									
									Active
								</td>
                                <td>{{$info->active}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Registration
								</td>
                                <td>{{$info->registration}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									CofA
								</td>
                                <td>{{$info->cofa}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
								STCs
								</td>
                                <td>{{$info->stcs}}</td>
                            </tr>
                            
                            <tr>
                                <td class="col-md-3">									
								Current Exemptions
								</td>
                                <td>{{$info->current_exemptions}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
								Insurance
								</td>
                                <td>{{$info->insurance}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
								Currently Leased
								</td>
                                <td>{{$info->currently_leased}}</td>
                            </tr>
                            
                            <tr>
                                <td class="col-md-3">									
								Memo
								</td>
                                <td>{{$info->memo}}</td>
                            </tr>
                        
                        </tbody>
                    </table>
					
                </div>
                <!-- /.box-body -->
                               
                            </div><!-- /.box -->
						</div>
						@endforeach
				</div>
{{--End Aircraft Primary Information--}}
{{--START OF TOTAL TYPE CERTIFICATE INFORMATION--}}
{{--Aircraft TYPE CERTIFICATE INFORMATION--}}
 <div class="row" style="">
                        
		  @foreach($infos as $info)
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary ">
							 <div class="box-header col-md-6">
									<h3 class="box-title">Aircraft Type Certificate Information</h3>
							  </div>
							  <div class='col-md-6'>
							   <a href="{{'deletePersonnel/'.$info->id}}" style='color:red;float:right;padding:5px;'>
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                    <a data-toggle="modal" data-target="#TCI{{$info->aircraft_MM.$info->aircraft_MSN}}" href='' style='color:green;float:right;padding:5px;'>
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
							  </div>
                <!-- /.box-header -->
				
				@if($ND!=0)
					<div class="box-body">
					
                    <table class="table table-bordered">
                        <tbody>
                         
                            <tr>
                                <td class="col-md-3">									
									State Of Registration
								</td>
                                <td>{{$info->state_of_registration}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Validation date
								</td>
                                <td>{{$info->validation_date.' '.$info->validation_month.' '.$info->validation_year}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Control Number
								</td>
                                <td>{{$info->control_number}}  </td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									AFM Approval Date
								</td>
                                <td>{{$info->AFM_approval_date.' '.$info->AFM_approval_month.' '.$info->AFM_approval_year}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									AFM Revision 
								</td>
                                <td>{{$info->AFM_revision}}</td>
                            </tr>
                            
                            <tr>
                                <td class="col-md-3">									
									State Of Design
								</td>
                                <td>{{$info->state_of_design}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									SOD Notified 
								</td>
                                <td>{{$info->SOD_notified_date.' '.$info->SOD_notified_month.' '.$info->SOD_notified_year}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Power Plant Model
								</td>
                                <td>{{$info->power_plant_model}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
								Power Plant TDS Number
								</td>
                                <td>{{$info->power_plant_TDS_number}}</td>
                            </tr>
                            
                            <tr>
                                <td class="col-md-3">									
								Propeller Model
								</td>
                                <td>{{$info->propeller_model}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
								Propeller TDS Number
								</td>
                                <td>{{$info->propeller_TDS_number}}</td>
                            </tr>
                                                   
                        </tbody>
                    </table>
					
                </div>
				@endif
                <!-- /.box-body -->
                               
                            </div><!-- /.box -->
						</div>
						@endforeach
				</div>
{{--End Aircraft TYPE CERTIFICATE INFORMATION--}}
{{--POP UP NEW ENTRY OF TYPE CERTIFICATE INFORMATION--}}
@foreach($infos as $info)
	<div class="modal fade" id="TCI{{$info->aircraft_MM.$info->aircraft_MSN}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">TCI Entry Form</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                
				{{Form::open(array('url'=>'aircraft/saveTCI','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}

					
					<div class="form-group ">
                                           
											{{Form::label('state_of_registration','State Of Registration', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('state_of_registration','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('validation_date', 'Validation date', array('class' => 'col-xs-4 control-label'))}}
											
													<div class="row">
														<div class="col-xs-2">
														{{Form::select('validation_date', $dates,'0',array('class'=>'form-control'))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('validation_month',$months,'0',array('class'=>'form-control'))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('validation_year',$years,'0',array('class'=>'form-control'))}}
														</div>
													</div>
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('AFM_approval_date', 'AFM Approval Date', array('class' => 'col-xs-4 control-label'))}}
											<div class="row">
														<div class="col-xs-2">
														{{Form::select('AFM_approval_date', $dates,'0',array('class'=>'form-control'))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('AFM_approval_month',$months,'0',array('class'=>'form-control'))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('AFM_approval_year',$years,'0',array('class'=>'form-control'))}}
														</div>
											</div>
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('AFM_revision', 'AFM Revision', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('AFM_revision','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('state_of_design', 'State Of Design ', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('state_of_design','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('SOD_notified', 'SOD Notified ', array('class' => 'col-xs-4 control-label'))}}
											<div class="row">
														<div class="col-xs-2">
														{{Form::select('SOD_notified_date', $dates,'0',array('class'=>'form-control'))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('SOD_notified_month',$months,'0',array('class'=>'form-control'))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('SOD_notified_year',$years,'0',array('class'=>'form-control'))}}
														</div>
													</div>
											
                    </div>
					
					<div class="form-group ">
                                           
											{{Form::label('power_plant_model', 'Power Plant Model ', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('power_plant_model','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('power_plant_TDS_number', 'Power Plant TDS Number ', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('power_plant_TDS_number','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
					
					
					<div class="form-group ">
                                           
											{{Form::label('propeller_model', 'Propeller Model', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('propeller_model','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('propeller_TDS_number', 'Propeller TDS Number ', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('propeller_TDS_number','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
					
					
					

					<div class="form-group">
                       
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
                       
                    </div>
					
					{{Form::close()}}
            </div>
        </div>
    </div>
</div>
@endforeach
{{--END POP UP NEW ENTRY OF TYPE CERTIFICATE INFORMATION--}}
{{--END OF TOTAL TYPE CERTIFICATE INFORMATION--}}

{{--START OF TOTAL SUPPLEMENTAL TYPE CERTIFICATE INFORMATION--}}
{{--Aircraft SUPPLEMENTAL TYPE CERTIFICATE INFORMATION--}}
 <div class="row" style="">
                        
		  @foreach($infos as $info)
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary ">
							 <div class="box-header col-md-7">
									<h3 class="box-title"> Aircraft Supplemental Type Certificate Information </h3>
							  </div>
							  <div class='col-md-5'>
							   <a href="{{'deletePersonnel/'.$info->id}}" style='color:red;float:right;padding:5px;'>
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                    <a data-toggle="modal" data-target="#STC{{$info->aircraft_MM.$info->aircraft_MSN}}" href='' style='color:green;float:right;padding:5px;'>
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
							  </div>
                <!-- /.box-header -->
				
				@if($ND!=0)
					<div class="box-body">
					
                    <table class="table table-bordered">
                        <tbody>
                         
                            <tr>
                                <td class="col-md-3">
									STC Number
								</td>
                                <td>{{$info->STC_number}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Validation date
								</td>
                                <td>{{$info->STC_validation_date.' '.$info->STC_validation_month.' '.$info->STC_validation_year}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Control Number
								</td>
                                <td>{{$info->STC_control_number}}  </td>
                            </tr>
                            <tr>
                                <td class="col-md-3">					
									State Of Design
								</td>
                                <td>{{$info->state_of_design}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">
								SOD Notified
								</td>
                                <td>{{$info->SOD_notified}}</td>
                            </tr>
                            
                            <tr>
                                <td class="col-md-3">
								AFM Revision Number
								</td>
                                <td>{{$info->AFM_revision_number}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">
								AFM Approval Date
								</td>
                                <td>{{$info->AFM_approval_date.' '.$info->AFM_approval_month.' '.$info->AFM_approval_year}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">
								Purpose
								</td>
                                <td>{{$info->STC_purpose}}</td>
                            </tr>
                            
                                                   
                        </tbody>
                    </table>
					
                </div>
				@endif
                <!-- /.box-body -->
                               
                            </div><!-- /.box -->
						</div>
						@endforeach
				</div>
{{--End Aircraft TYPE CERTIFICATE INFORMATION--}}
{{--POP UP NEW ENTRY OF THE SUPPLEMENTAL TYPE CERTIFICATE INFORMATION--}}
@foreach($infos as $info)
	<div class="modal fade" id="STC{{$info->aircraft_MM.$info->aircraft_MSN}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Aircraft STC Entry Form</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                
				{{Form::open(array('url'=>'aircraft/saveSTC','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}

					
					<div class="form-group required">
                                           
											{{Form::label('STC_umber','STC Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('STC_umber','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('validation_date', 'Validation date', array('class' => 'col-xs-4 control-label'))}}
											
													<div class="row">
														<div class="col-xs-2">
														{{Form::select('STC_validation_date', $dates,'0',array('class'=>'form-control'))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('STC_validation_month',$months,'0',array('class'=>'form-control'))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('STC_validation_year',$years,'0',array('class'=>'form-control'))}}
														</div>
													</div>
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('STC_control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('STC_control_number','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
					
					<div class="form-group ">
                                           
											{{Form::label('AFM_revision', 'AFM Revision', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('AFM_revision','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('state_of_design', 'State Of Design ', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('state_of_design','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('SOD_notified', 'SOD Notified ', array('class' => 'col-xs-4 control-label'))}}
											 <div class="col-xs-6">
										<div class="radio">
									 
									  <label> <label> {{ Form::radio('SOD_notified', 'Yes') }} &nbsp  Yes</label>
									 <label> {{ Form::radio('SOD_notified', 'No') }} &nbsp  No</label>
									</div>
									
								</div>
											
                    </div>
					
					<div class="form-group ">
                                           
											{{Form::label('AFM_revision_number', 'AFM Revision Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('AFM_revision_number','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
					
					<div class="form-group ">
                                           
											{{Form::label('AFM_approval_date', 'AFM Approval Date', array('class' => 'col-xs-4 control-label'))}}
											
													<div class="row">
														<div class="col-xs-2">
														{{Form::select('AFM_approval_date', $dates,'0',array('class'=>'form-control'))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('AFM_approval_month',$months,'0',array('class'=>'form-control'))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('AFM_approval_year',$years,'0',array('class'=>'form-control'))}}
														</div>
													</div>
											
                    </div>
					
					<div class="form-group ">
                                           
											{{Form::label('STC_purpose', 'Purpose', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('STC_purpose','', array('class' => 'form-control','placeholder'=>'','size'=>'4x3'))}}
											</div>
											
                    </div>
					
					<div class="form-group">
                       
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
                       
                    </div>
					
					{{Form::close()}}
            </div>
        </div>
    </div>
</div>
@endforeach
	{{--END POP UP NEW ENTRY OF THE SUPPLEMENTAL TYPE CERTIFICATE INFORMATION--}}
{{--END OF TOTAL SUPPLEMENTAL TYPE CERTIFICATE INFORMATION--}}
</section>
@stop