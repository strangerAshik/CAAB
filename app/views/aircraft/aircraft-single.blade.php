@extends('layout')
@section('content')
<span style='display:none'>
{{$role=Auth::User()->Role()}}
</span>
<section class="content" style="max-width:900px;margin:0 auto;">
{{--Menu--}}
@if($role=='Chief Admin'||$role=='Maintenance Eng.')
@include('aircraft/menu')
	@yield('aircraftMenuDetails')
@endif
{{--End Menu--}}

{{--Aircraft Primary Information--}}
 <div class="row" >
                        
		  @foreach($primaryData as $primary)
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary ">
							 <div class="box-header col-md-6">
									<h3 class="box-title">Aircraft Primary Information</h3>
							  </div>
							  <div class='col-md-6 hidden-print'>
							  @if($role=='Chief Admin'||$role=='Director')
									{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('aircraft_primary_info',$primary->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
							  @endif
							  @if($role=='Chief Admin')
									{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('aircraft_primary_info',$primary->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
							   @endif
									
									{{-- HTML::linkAction('AircraftController@undoSoftDelete', 'Undo.D',array('aircraft_primary_info',$primary->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) --}}
								@if($role=='Chief Admin'||$role=='Director'||$role=='Deputy Director'||$role=='Inspector')
                                  
									{{ HTML::linkAction('AircraftController@approve', '',array('aircraft_primary_info',$primary->id), array('class' => 'glyphicon glyphicon-ok','style'=>'color:green;float:right;padding:5px;')) }}
								
									
									{{ HTML::linkAction('AircraftController@notApprove', '',array('aircraft_primary_info',$primary->id), array('class' => 'glyphicon glyphicon-ok','style'=>'color:red;float:right;padding:5px;')) }}
								@endif
								@if($role=='Chief Admin'||$role=='Director'||$role=='Deputy Director'||$role=='Inspector')
									{{ HTML::linkAction('AircraftController@removeWarning', '',array('aircraft_primary_info',$primary->id), array('class' => 'glyphicon glyphicon-bell','style'=>'color:green;float:right;padding:5px;')) }}
									{{ HTML::linkAction('AircraftController@warning', '',array('aircraft_primary_info',$primary->id), array('class' => 'glyphicon glyphicon-bell','style'=>'color:red;float:right;padding:5px;')) }}
								@endif
								@if($role=='Chief Admin'||$role=='Director'||$role=='Maintenance Eng.')
									 <a data-toggle="modal" data-target="#editPrimaryInfoForm{{$primary->id}}" href='' style='color:green;float:right;padding:5px;'>
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</a>
								@endif
							     
							  </div>
                <!-- /.box-header -->
				
					<div class="box-body">
					
                    <table class="table table-bordered">
                        <tbody>
                           @if($primary->approve=='0')
						<tr>
							<th  colspan='2'> {{AircraftPrimaryInfo::notApproved($primary)}}</th>	
						 </tr>
						 @endif
						 @if($primary->warning=='1')
						 <tr  >
						 <th colspan='2'>{{AircraftPrimaryInfo::warning($primary)}}	</th>
						 </tr>  
						 @endif
                            <tr>
                                <td class="col-md-3">									
									Serial Number
								</td>
                                <td>{{$primary->serial_number}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Registration No#
								</td>
                                <td>{{$primary->registration_no}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Aircraft MM
								</td>
                                <td>{{$primary->aircraft_MM}}  </td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Aircraft MSN
								</td>
                                <td>{{$primary->aircraft_MSN}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Aircraft Operator
								</td>
                                <td>{{$primary->aircraft_operator}}</td>
                            </tr>
                            
                            <tr>
                                <td class="col-md-3">									
									Active
								</td>
                                <td>{{$primary->active}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Registration
								</td>
                                <td>{{$primary->registration}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									CofA
								</td>
                                <td>{{$primary->cofa}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
								STCs
								</td>
                                <td>{{$primary->stcs}}</td>
                            </tr>
                            
                            <tr>
                                <td class="col-md-3">									
								Current Exemptions
								</td>
                                <td>{{$primary->current_exemptions}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
								Insurance
								</td>
                                <td>{{$primary->insurance}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
								Currently Leased
								</td>
                                <td>{{$primary->currently_leased}}</td>
                            </tr>
                            
                            <tr>
                                <td class="col-md-3">									
								Memo
								</td>
                                <td>{{$primary->memo}}</td>
                            </tr>
                        
                        </tbody>
                    </table>
					
                </div>
                <!-- /.box-body -->
                               
                            </div><!-- /.box -->
						</div>
		
{{--Entry Form--}}

@include('aircraft/entryForm')
	@yield('TCIForm')
	@yield('STCForm')
	@yield('exemptionForm')
	@yield('registrationInfoForm')
	@yield('ACForm')
	@yield('approvalForm')
	@yield('ownerForm')
	@yield('lesseeForm')
	@yield('insurerForm')
	@yield('equipmentReviewForm')
	
{{--End Entry Form--}}



		@endforeach
</div>
{{--End Aircraft Primary Information--}}
{{--Aircraft TC Information--}}
 <div class="row" >
                        
		
                 <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary ">
							 <div class="box-header col-md-6">
									<h3 class="box-title">Aircraft TC Information</h3>
							  </div>
							  <div class='col-md-6'>
							  
							  </div>
                <!-- /.box-header -->
					<div style='display:none'>
					{{$num=0;}}
					</div>
					 @foreach($tcData as $tc)	
					<div class="box-body">
					
                    <table class="table table-bordered">
									 
					   <tbody>	
						
                        
						 <tr>
							<th colspan='2'>TC Information #{{++$num}}  
								 <span class='hidden-print'>
                                   @if($role=='Chief Admin'||$role=='Director')

									{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('aircraft_tc_info',$tc->id), array('class' => 'glyphicon glyphicon-trash hidden-print','style'=>'color:red;float:right;padding:5px;')) }}
									
									{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('aircraft_tc_info',$tc->id), array('class' => 'glyphicon glyphicon-trash hidden-print','style'=>'color:red;float:right;padding:5px;')) }}
									
									{{-- HTML::linkAction('AircraftController@undoSoftDelete', 'Undo.D',array('aircraft_tc_info',$tc->id), array('class' => 'glyphicon glyphicon-trash hidden-print','style'=>'color:red;float:right;padding:5px;')) --}}
                                  @endif
								  @if($role=='Chief Admin'||$role=='Director'||$role=='Deputy Director'||$role=='Inspector')

									{{ HTML::linkAction('AircraftController@approve', '',array('aircraft_tc_info',$tc->id), array('class' => 'glyphicon glyphicon-ok hidden-print','style'=>'color:green;float:right;padding:5px;')) }}
									
									{{ HTML::linkAction('AircraftController@notApprove', '',array('aircraft_tc_info',$tc->id), array('class' => 'glyphicon glyphicon-ok hidden-print','style'=>'color:red;float:right;padding:5px;')) }}
									
									{{ HTML::linkAction('AircraftController@removeWarning', '',array('aircraft_tc_info',$tc->id), array('class' => 'glyphicon glyphicon-bell hidden-print','style'=>'color:green;float:right;padding:5px;')) }}
									{{ HTML::linkAction('AircraftController@warning', '',array('aircraft_tc_info',$tc->id), array('class' => 'glyphicon glyphicon-bell hidden-print','style'=>'color:red;float:right;padding:5px;')) }}
									@endif
									@if($role=='Chief Admin'||$role=='Maintenance Eng.')

									 <a data-toggle="modal" data-target="#editTCIForm{{$tc->id}}" href='' style='color:green;float:right;padding:5px;'>
										<span class="glyphicon glyphicon-pencil hidden-print" aria-hidden="true"></span>
									</a>
									@endif
								</span>
								
							</th>
                         </tr>  
						 @if($tc->approve=='0')
						<tr>
							<th  colspan='2'> {{AircraftPrimaryInfo::notApproved($tc)}}</th>	
						 </tr>
						 @endif
						 @if($tc->warning=='1')
						 <tr  >
						 <th colspan='2'>{{AircraftPrimaryInfo::warning($tc)}}	</th>
						 </tr>  
						 @endif
						<tr>
							<td class="col-md-3">									
								Aircraft MM
							</td>
							<td>{{$tc->aircraft_MM}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">									
								Aircraft MSN
							</td>
							<td>{{$tc->aircraft_MSN}}</td>
						</tr>
						<tr>
							<td class="col-md-3">									
								TC Number
							</td>
							<td>{{$tc->tc_number}}</td>
						</tr>						
						<tr>
							<td class="col-md-3">									
								State Of Registration
							</td>
							<td>{{$tc->tc_state_of_registration}}</td>
						</tr>					
						<tr>
							<td class="col-md-3">									
								Validation Date
							</td>
							<td>{{$tc->tc_validation_date.' '.$tc->tc_validation_month.' '.$tc->tc_validation_year}}</td>
						</tr>
						<tr>
							<td class="col-md-3">									
								Control Number
							</td>
							<td>{{$tc->tc_control_number}}</td>
						</tr>   
						<tr>
							<td class="col-md-3">									
								AFM Approval Date
							</td>
							<td>{{$tc->tc_AFM_approval_date.' '.$tc->tc_AFM_approval_month.' '.$tc->tc_AFM_approval_year}}</td>
						</tr>
						
						<tr>
							<td class="col-md-3">									
								AFM Revision
							</td>
							<td>{{$tc->tc_AFM_revision}}</td>
						</tr> 
						<tr>
							<td class="col-md-3">									
								State Of Design
							</td>
							<td>{{$tc->tc_state_of_design}}</td>
						</tr> 
						<tr>
							<td class="col-md-3">									
								SOD Notified Date
							</td>
							<td>{{$tc->tc_SOD_notified_date.' '.$tc->tc_SOD_notified_month.' '.$tc->tc_SOD_notified_year}}</td>
						</tr>
						<tr>
							<td class="col-md-3">									
								Power Plant Model
							</td>
							<td>{{$tc->tc_power_plant_model}}</td>
						</tr> 
						<tr>
							<td class="col-md-3">									
								Power Plant TDS Number
							</td>
							<td>{{$tc->tc_power_plant_tds_number}}</td>
						</tr> 
						<tr>
							<td class="col-md-3">									
								Propeller Model
							</td>
							<td>{{$tc->tc_propeller_model}}</td>
						</tr> 
						<tr>
							<td class="col-md-3">									
								Propeller TDS Number
							</td>
							<td>{{$tc->tc_propeller_tds_number}}</td>
						</tr> 
                       
                        </tbody>
						
					
                    </table>
					
                </div>
				
					@endforeach
                <!-- /.box-body -->
                               
                          </div><!-- /.box -->
						</div>
		
					
</div>
{{--End Aircraft TC Information--}}
{{--Aircraft STC Information--}}
 <div class="row" >
                        
		
                 <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary ">
							 <div class="box-header col-md-6">
									<h3 class="box-title">Aircraft STC Information</h3>
							  </div>
							  <div class='col-md-6'>
							  
							  </div>
                <!-- /.box-header -->
					<div style='display:none'>
					{{$num=0;}}
					</div>
					 @foreach($stcData as $stc)
					<div class="box-body">
					
                    <table class="table table-bordered">
					
					   <tbody>						
                         <tr>
							<th colspan='2'>TC Information #{{++$num}} 
							 <span class='hidden-print'>
								@if($role=='Chief Admin'||$role=='Director')

									{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('aircraft_stc_info',$stc->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
									
									{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('aircraft_stc_info',$stc->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
								@endif
									{{-- HTML::linkAction('AircraftController@undoSoftDelete', 'Undo.D',array('aircraft_stc_info',$stc->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) --}}
                                  
								@if($role=='Chief Admin'||$role=='Director'||$role=='Deputy Director'||$role=='Inspector')

									{{ HTML::linkAction('AircraftController@approve', '',array('aircraft_stc_info',$stc->id), array('class' => 'glyphicon glyphicon-ok','style'=>'color:green;float:right;padding:5px;')) }}
									
									{{ HTML::linkAction('AircraftController@notApprove', '',array('aircraft_stc_info',$stc->id), array('class' => 'glyphicon glyphicon-ok','style'=>'color:red;float:right;padding:5px;')) }}
									
									{{ HTML::linkAction('AircraftController@removeWarning', '',array('aircraft_stc_info',$stc->id), array('class' => 'glyphicon glyphicon-bell','style'=>'color:green;float:right;padding:5px;')) }}
									{{ HTML::linkAction('AircraftController@warning', '',array('aircraft_stc_info',$stc->id), array('class' => 'glyphicon glyphicon-bell','style'=>'color:red;float:right;padding:5px;')) }}
									@endif
									@if($role=='Chief Admin'||$role=='Maintenance Eng.')
									<a data-toggle="modal" data-target="#editSTCForm{{$stc->id}}" href='' style='color:green;float:right;padding:5px;'>
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</a>
									@endif
									
								</span>
									</th>
                         </tr>    
						 @if($stc->approve=='0')
						<tr>
							<th  colspan='2'> {{AircraftPrimaryInfo::notApproved($stc)}}</th>	
						 </tr>
						 @endif
						 @if($stc->warning=='1')
						 <tr  >
						 <th colspan='2'>{{AircraftPrimaryInfo::warning($stc)}}	</th>
						 </tr>  
						 @endif
						
						<tr>
							<td class="col-md-3">									
								STC Number
							</td>
							<td>{{$stc->stc_number}}</td>
						</tr>
						<tr>
							<td class="col-md-3">									
								Validation Date
							</td>
							<td>{{$stc->stc_validation_date.' '.$stc->stc_validation_month.' '.$stc->stc_validation_year}}</td>
						</tr>
                         <tr>
							<td class="col-md-3">									
								Control Number
							</td>
							<td>{{$stc->stc_control_number}}</td>
						</tr> 
                         <tr>
							<td class="col-md-3">
								AFM Revision
							</td>
							<td>{{$stc->stc_afm_revision}}</td>
						</tr>  
                         <tr>
							<td class="col-md-3">
								State Of Design
							</td>
							<td>{{$stc->stc_state_of_design}}</td>
						</tr> 
                         <tr>
							<td class="col-md-3">
							SOD Notified
							</td>
							<td>{{$stc->stc_SOD_notified}}</td>
						</tr>  
                         <tr>
							<td class="col-md-3">
							AFM Revision Number
							</td>
							<td>{{$stc->stc_AFM_revision_number}}</td>
						</tr> 
                         <tr>
							<td class="col-md-3">
							AFM Approval Date
							</td>
							<td>{{$stc->stc_AFM_approval_date.' '.$stc->stc_AFM_approval_month.' '.$stc->stc_AFM_approval_year}}</td>
						</tr>  
                         <tr>
							<td class="col-md-3">
							Purpose
							</td>
							<td>{{$stc->stc_purpose}}</td>
						</tr>  
                        
                        </tbody>
					
                    </table>
					
                </div>
                <!-- /.box-body -->
				@endforeach
			
			
				
                               
                          </div><!-- /.box -->
						</div>
		

</div>
{{--End Aircraft STC Information--}}
{{--Aircraft Exemption Information--}}
 <div class="row" >
                        
		
                 <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary ">
							 <div class="box-header col-md-6">
									<h3 class="box-title">Aircraft Exemption Information</h3>
							  </div>
							  <div class='col-md-6'>
							  
							  </div>
                <!-- /.box-header -->
					<div style='display:none'>
					{{$num=0;}}
					</div>
					<div class="box-body">
					
                    <table class="table table-bordered">
					 @foreach($exemptionData as $exemption)
					   <tbody>						
                         <tr>
							<th colspan='2'>Exemption Information #{{++$num}} 
							 <span class='hidden-print'>
						@if($role=='Chief Admin'||$role=='Director')

						{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('aircraft_exemption_info',$exemption->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('aircraft_exemption_info',$exemption->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{-- HTML::linkAction('AircraftController@undoSoftDelete', 'Undo.D',array('aircraft_exemption_info',$exemption->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) --}}
						@endif
						@if($role=='Chief Admin'||$role=='Director'||$role=='Deputy Director'||$role=='Inspector')

						{{ HTML::linkAction('AircraftController@approve', '',array('aircraft_exemption_info',$exemption->id), array('class' => 'glyphicon glyphicon-ok','style'=>'color:green;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@notApprove', '',array('aircraft_exemption_info',$exemption->id), array('class' => 'glyphicon glyphicon-ok','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@removeWarning', '',array('aircraft_exemption_info',$exemption->id), array('class' => 'glyphicon glyphicon-bell','style'=>'color:green;float:right;padding:5px;')) }}
						{{ HTML::linkAction('AircraftController@warning', '',array('aircraft_exemption_info',$exemption->id), array('class' => 'glyphicon glyphicon-bell','style'=>'color:red;float:right;padding:5px;')) }}
						@endif
						@if($role=='Chief Admin'||$role=='Maintenance Eng.')

						 <a data-toggle="modal" data-target="#editExemptionForm{{$exemption->id}}" href='' style='color:green;float:right;padding:5px;'>
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</a>
						@endif
						</span>
							
							</th>
                         </tr> 
						 @if($exemption->approve=='0')
						<tr>
							<th  colspan='2'> {{AircraftPrimaryInfo::notApproved($exemption)}}</th>	
						 </tr>
						 @endif
						 @if($exemption->warning=='1')
						 <tr  >
						 <th colspan='2'>{{AircraftPrimaryInfo::warning($exemption)}}	</th>
						 </tr>  
						 @endif
						
						<tr>
							<td class="col-md-3">
							Exemption Number
							</td>
							<td>{{$exemption->exemption_number}}</td>
						</tr>
						<tr>
							<td class="col-md-3">
							Regulation
							</td>
							<td>{{$exemption->regulation}}</td>
						</tr>
						<tr>
							<td class="col-md-3">
							Effective Date
							</td>
							<td>{{$exemption->effective_date.' '.$exemption->effective_month.' '.
							    $exemption->effective_year}}</td>
						</tr>
						<tr>
							<td class="col-md-3">
							Control Number
							</td>
							<td>{{$exemption->exemption_control_number}}</td>
						</tr>
						<tr>
							<td class="col-md-3">
							Basis
							</td>
							<td>{{$exemption->basis}}</td>
						</tr>
                           
                        
                        </tbody>
					@endforeach
                    </table>
					
                </div>
                <!-- /.box-body -->
                               
                          </div><!-- /.box -->
						</div>
		

</div>
{{--End Aircraft Exemption Information--}}
{{--Aircraft Registration Information--}}
 <div class="row" >
                        
		
                 <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary ">
							 <div class="box-header col-md-6">
									<h3 class="box-title">Aircraft Registration Information</h3>
							  </div>
							  <div class='col-md-6'>
							  
							  </div>
                <!-- /.box-header -->
					<div style='display:none'>
					{{$num=0;}}
					</div>
					<div class="box-body">
					
                    <table class="table table-bordered">
					 @foreach($registrationData as $registration)
					   <tbody>						
                         <tr>
							<th colspan='2'>Registration Information #{{++$num}} 
							 <span class='hidden-print'>
					    @if($role=='Chief Admin'||$role=='Director')

						{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('aircraft_registration_info',$registration->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('aircraft_registration_info',$registration->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{-- HTML::linkAction('AircraftController@undoSoftDelete', 'Undo.D',array('aircraft_registration_info',$registration->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) --}}
					  @endif
					  @if($role=='Chief Admin'||$role=='Director'||$role=='Deputy Director'||$role=='Inspector')

						{{ HTML::linkAction('AircraftController@approve', '',array('aircraft_registration_info',$registration->id), array('class' => 'glyphicon glyphicon-ok','style'=>'color:green;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@notApprove', '',array('aircraft_registration_info',$registration->id), array('class' => 'glyphicon glyphicon-ok','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@removeWarning', '',array('aircraft_registration_info',$registration->id), array('class' => 'glyphicon glyphicon-bell','style'=>'color:green;float:right;padding:5px;')) }}
						{{ HTML::linkAction('AircraftController@warning', '',array('aircraft_registration_info',$registration->id), array('class' => 'glyphicon glyphicon-bell','style'=>'color:red;float:right;padding:5px;')) }}
						@endif
						@if($role=='Chief Admin'||$role=='Maintenance Eng.')
						 <a data-toggle="modal" data-target="#editRegistrationInfoForm{{$registration->id}}" href='' style='color:green;float:right;padding:5px;'>
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</a>
						@endif
							</span>
							</th>
                         </tr>
						  @if($registration->approve=='0')
						<tr>
							<th  colspan='2'> {{AircraftPrimaryInfo::notApproved($registration)}}</th>	
						 </tr>
						 @endif
						 @if($registration->warning=='1')
						 <tr  >
						 <th colspan='2'>{{AircraftPrimaryInfo::warning($registration)}}	</th>
						 </tr>  
						 @endif
						
						<tr>
							<td class="col-md-3">
							Registration Number
							</td>
							<td>{{$registration->registration_number}}</td>
						</tr>
						<tr>
							<td class="col-md-3">
							Effective Date
							</td>
							<td>{{$registration->reg_effective_date.' '.$registration->reg_effective_month.' '.$registration->reg_effective_year}}</td>
						</tr>
						<tr>
							<td class="col-md-3">
							State Of Registration
							</td>
							<td>{{$registration->state_of_registration}}</td>
						</tr>
						<tr>
							<td class="col-md-3">
							Activation Control Number
							</td>
							<td>
							{{$registration->activation_control_number}}
							</td>
						</tr>
						<tr>
							<td class="col-md-3">
							Expiration Date
							</td>
							<td>
							{{
								$registration->reg_expiration_date.' '.$registration->reg_expiration_month.' '.$registration->reg_expiration_year
							}}
							</td>
						</tr>
						<tr>
							<td class="col-md-3">
							Registry Number
							</td>
							<td>
							{{
								$registration->registry_number
							}}
							</td>
						</tr>
						<tr>
							<td class="col-md-3">
							De-registration Date
							</td>
							<td>
							{{
								$registration->de_registration_date.' '.$registration->de_registration_month.' '.$registration->de_registration_year
							}}
							</td>
						</tr>
						<tr>
							<td class="col-md-3">
							De-registration Control Number
							</td>
							<td>
							{{
								$registration->de_regisration_control_number
							}}
							</td>
						</tr>
						<tr>
							<td class="col-md-3">
							De-registration Basis
							</td>
							<td>
							{{
								$registration->de_regisration_basis
							}}
							</td>
						</tr>
						<tr>
							<td class="col-md-3">
							Previous State Of Registration
							</td>
							<td>
							{{
								$registration->previous_state_registration
							}}
							</td>
						</tr>
						<tr>
							<td class="col-md-3">
							Status Memo
							</td>
							<td>
							{{
								$registration->reg_status_memo
							}}
							</td>
						</tr>
                           
                        
                        </tbody>
					@endforeach
                    </table>
					
                </div>
                <!-- /.box-body -->
                               
                          </div><!-- /.box -->
						</div>
		

</div>
{{--End Aircraft Registration Information--}}
{{--Aircraft Airworthiness Information--}}
 <div class="row" >
                        
		
                 <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary ">
							 <div class="box-header col-md-6">
									<h3 class="box-title">Aircraft Airworthiness Information</h3>
							  </div>
							  <div class='col-md-6'>
							  
							  </div>
                <!-- /.box-header -->
					<div style='display:none'>
					{{$num=0;}}
					</div>
					<div class="box-body">
					
                    <table class="table table-bordered">
					 @foreach($airworthinessData as $airworthiness)
					   <tbody>						
                         <tr>
							<th colspan='2'>Airworthiness Information #{{++$num}}   
							 <span class='hidden-print'>
					    @if($role=='Chief Admin'||$role=='Director')

						{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('aircraft_airworthiness_info',$airworthiness->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('aircraft_airworthiness_info',$airworthiness->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{-- HTML::linkAction('AircraftController@undoSoftDelete', 'Undo.D',array('aircraft_airworthiness_info',$airworthiness->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) --}}
					  @endif
					  @if($role=='Chief Admin'||$role=='Director'||$role=='Deputy Director'||$role=='Inspector')

						{{ HTML::linkAction('AircraftController@approve', '',array('aircraft_airworthiness_info',$airworthiness->id), array('class' => 'glyphicon glyphicon-ok','style'=>'color:green;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@notApprove', '',array('aircraft_airworthiness_info',$airworthiness->id), array('class' => 'glyphicon glyphicon-ok','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@removeWarning', '',array('aircraft_airworthiness_info',$airworthiness->id), array('class' => 'glyphicon glyphicon-bell','style'=>'color:green;float:right;padding:5px;')) }}
						{{ HTML::linkAction('AircraftController@warning', '',array('aircraft_airworthiness_info',$airworthiness->id), array('class' => 'glyphicon glyphicon-bell','style'=>'color:red;float:right;padding:5px;')) }}
						@endif
						@if($role=='Chief Admin'||$role=='Maintenance Eng.')
						 <a data-toggle="modal" data-target="#editACForm{{$airworthiness->id}}" href='' style='color:green;float:right;padding:5px;'>
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</a>
						@endif
						</span>
							</th>
                         </tr> 
						  @if($airworthiness->approve=='0')
						<tr>
							<th  colspan='2'> {{AircraftPrimaryInfo::notApproved($airworthiness)}}</th>	
						 </tr>
						 @endif
						 @if($airworthiness->warning=='1')
						 <tr  >
						 <th colspan='2'>{{AircraftPrimaryInfo::warning($airworthiness)}}	</th>
						 </tr>  
						 @endif
						<tr>
							<td class="col-md-3">
							Effective Date
							</td>
							<td>{{$airworthiness->ac_effective_date.' '.$airworthiness->ac_effective_month.' '.$airworthiness->ac_effective_year}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							CofA Type
							</td>
							<td>{{$airworthiness->ac_cofa_type}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Category
							</td>
							<td>{{$airworthiness->ac_category}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Activation Control Number
							</td>
							<td>{{$airworthiness->ac_activation_control_number}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							C Of A Number
							</td>
							<td>{{$airworthiness->c_of_a_number}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Expiration Date
							</td>
							<td>{{$airworthiness->ac_expiration_date.' '.$airworthiness->ac_expiration_month.' '.$airworthiness->ac_expiration_year}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Max Gross Take Off Weight
							</td>
							<td>{{$airworthiness->max_gross_take_off_weight}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Max Pax Seating Capacity
							</td>
							<td>{{$airworthiness->max_pax_seating_capacity}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Mode S Code
							</td>
							<td>{{$airworthiness->mode_s_code}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Deactivation Date
							</td>
							<td>{{$airworthiness->ac_deactivation_date. ' '.$airworthiness->ac_deactivation_month. ' '.$airworthiness->ac_deactivation_year}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Deactivation Basis
							</td>
							<td>{{$airworthiness->ac_deactivation_basis}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Deactivation Control Number
							</td>
							<td>{{$airworthiness->ac_deactivation_control_number}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							System Of Airworthiness
							</td>
							<td>{{$airworthiness->system_of_airwothiness}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Status Memo
							</td>
							<td>{{$airworthiness->ac_status_memo}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Exemption
							</td>
							<td>{{$airworthiness->ac_exemption}}  </td>
						</tr>
					
                        </tbody>
					@endforeach
                    </table>
					
                </div>
                <!-- /.box-body -->
                               
                          </div><!-- /.box -->
						</div>
		

</div>
{{--End Aircraft Airworthiness Information--}}
{{--Aircraft CAA Approval Information--}}
 <div class="row" >
                        
		
                 <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary ">
							 <div class="box-header col-md-6">
									<h3 class="box-title">Aircraft CAA Approval Information</h3>
							  </div>
							  <div class='col-md-6'>
							  
							  </div>
                <!-- /.box-header -->
					<div style='display:none'>
					{{$num=0;}}
					</div>
					<div class="box-body">
					
                    <table class="table table-bordered">
					 @foreach($approvalData as $approval)
					   <tbody>						
                         <tr>
							<th colspan='2'>Approval Information #{{++$num}}
							 <span class='hidden-print'>
						@if($role=='Chief Admin'||$role=='Director')

						{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('aircraft_caa_approval_info',$approval->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('aircraft_caa_approval_info',$approval->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{-- HTML::linkAction('AircraftController@undoSoftDelete', 'Undo.D',array('aircraft_caa_approval_info',$approval->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) --}}
					  @endif
					  @if($role=='Chief Admin'||$role=='Director'||$role=='Deputy Director'||$role=='Inspector')

						{{ HTML::linkAction('AircraftController@approve', '',array('aircraft_caa_approval_info',$approval->id), array('class' => 'glyphicon glyphicon-ok','style'=>'color:green;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@notApprove', '',array('aircraft_caa_approval_info',$approval->id), array('class' => 'glyphicon glyphicon-ok','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@removeWarning', '',array('aircraft_caa_approval_info',$approval->id), array('class' => 'glyphicon glyphicon-bell','style'=>'color:green;float:right;padding:5px;')) }}
						{{ HTML::linkAction('AircraftController@warning', '',array('aircraft_caa_approval_info',$approval->id), array('class' => 'glyphicon glyphicon-bell','style'=>'color:red;float:right;padding:5px;')) }}
						@endif
						@if($role=='Chief Admin'||$role=='Maintenance Eng.')

						 <a data-toggle="modal" data-target="#editApprovalForm{{$approval->id}}" href='' style='color:green;float:right;padding:5px;'>
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</a>
						@endif
						</span>
							</th>
                         </tr> 
						@if($approval->approve=='0')
						<tr>
							<th  colspan='2'> {{AircraftPrimaryInfo::notApproved($approval)}}</th>	
						 </tr>
						 @endif
						 @if($approval->warning=='1')
						 <tr  >
						 <th colspan='2'>{{AircraftPrimaryInfo::warning($approval)}}	</th>
						 </tr>  
						 @endif
						 
						<tr>
							<td class="col-md-3">									
								Type Of Approval
							</td>
							<td>{{$approval->type_of_approval}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Effective Date
							</td>
							<td>{{$approval->approval_effective_date.' '.$approval->approval_effective_month.' '.$approval->approval_effective_year}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Rescinded Date
							</td>
							<td>{{$approval->rescinded_date.' '.$approval->rescinded_month.' '.$approval->rescinded_year}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Control Number
							</td>
							<td>{{$approval->rescinded_control_number}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Limiting Factor
							</td>
							<td>{{$approval->limiting_factor}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Terms Of Approval Memo
							</td>
							<td>{{$approval->terms_of_approval_memo}}  </td>
						</tr>
						
                           
                        
                        </tbody>
					@endforeach
                    </table>
					
                </div>
                <!-- /.box-body -->
                               
                          </div><!-- /.box -->
						</div>
		

</div>
{{--End Aircraft CAA Approval Information--}}
{{--Aircraft Owner Information--}}
 <div class="row" >
                        
		
                 <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary ">
							 <div class="box-header col-md-6">
									<h3 class="box-title">Aircraft Owner Information</h3>
							  </div>
							  <div class='col-md-6'>
							  
							  </div>
                <!-- /.box-header -->
					<div style='display:none'>
					{{$num=0;}}
					</div>
					<div class="box-body">
					
                    <table class="table table-bordered">
					 @foreach($ownerData as $owner)
					   <tbody>						
                         <tr>
							<th colspan='2'>Exemption Information #{{++$num}}   
							 <span class='hidden-print'>
						@if($role=='Chief Admin'||$role=='Director')

						{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('aircraft_owner_info',$owner->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('aircraft_owner_info',$owner->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{-- HTML::linkAction('AircraftController@undoSoftDelete', 'Undo.D',array('aircraft_owner_info',$owner->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) --}}
					  @endif
					  @if($role=='Chief Admin'||$role=='Director'||$role=='Deputy Director'||$role=='Inspector')

						{{ HTML::linkAction('AircraftController@approve', '',array('aircraft_owner_info',$owner->id), array('class' => 'glyphicon glyphicon-ok','style'=>'color:green;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@notApprove', '',array('aircraft_owner_info',$owner->id), array('class' => 'glyphicon glyphicon-ok','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@removeWarning', '',array('aircraft_owner_info',$owner->id), array('class' => 'glyphicon glyphicon-bell','style'=>'color:green;float:right;padding:5px;')) }}
						{{ HTML::linkAction('AircraftController@warning', '',array('aircraft_owner_info',$owner->id), array('class' => 'glyphicon glyphicon-bell','style'=>'color:red;float:right;padding:5px;')) }}
						@endif
						@if($role=='Chief Admin'||$role=='Maintenance Eng.')
						<a data-toggle="modal" data-target="#editOwnerForm{{$owner->id}}" href='' style='color:green;float:right;padding:5px;'>
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</a>
						@endif
						</span>
							</th>
                         </tr>    
						@if($owner->approve=='0')
						<tr>
							<th  colspan='2'> {{AircraftPrimaryInfo::notApproved($owner)}}</th>	
						 </tr>
						 @endif
						 @if($owner->warning=='1')
						 <tr  >
						 <th colspan='2'>{{AircraftPrimaryInfo::warning($owner)}}	</th>
						 </tr>  
						 @endif
						<tr>
							<td class="col-md-3">									
								Owner Name
							</td>
							<td>{{$owner->owner_name}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Effective Date
							</td>
							<td>{{$owner->owner_effective_date.' '.$owner->owner_effective_month.' '.$owner->owner_effective_year}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Address #1
							</td>
							<td>{{$owner->owner_address1}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Address #2
							</td>
							<td>{{$owner->owner_address2}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Phone
							</td>
							<td>{{$owner->owner_phone}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Fax
							</td>
							<td>{{$owner->owner_fax}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Email
							</td>
							<td>{{$owner->owner_email}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							City
							</td>
							<td>{{$owner->owner_city}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							State/Province
							</td>
							<td>{{$owner->owner_state_or_province}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Postal Code
							</td>
							<td>{{$owner->owner_postal_code}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Country
							</td>
							<td>{{$owner->owner_country}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
						Lessor
							</td>
							<td>{{$owner->owner_lessor}}  </td>
						</tr>
						
                        </tbody>
					@endforeach
                    </table>
					
                </div>
                <!-- /.box-body -->
                               
                          </div><!-- /.box -->
						</div>
		

</div>
{{--End Aircraft Owner Information--}}
{{--Aircraft lesseeData Information--}}
 <div class="row" >
                        
		
                 <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary ">
							 <div class="box-header col-md-6">
									<h3 class="box-title">Aircraft Lessee Information</h3>
							  </div>
							  <div class='col-md-6'>
							  
							  </div>
                <!-- /.box-header -->
					<div style='display:none'>
					{{$num=0;}}
					</div>
					<div class="box-body">
					
                    <table class="table table-bordered">
					 @foreach($lesseeData as $lessee)
					   <tbody>						
                         <tr>
							<th colspan='2'>Lessee Information #{{++$num}}
							 <span class='hidden-print'>
					 @if($role=='Chief Admin'||$role=='Director')

						{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('aircraft_lessee_info',$lessee->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('aircraft_lessee_info',$lessee->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{-- HTML::linkAction('AircraftController@undoSoftDelete', 'Undo.D',array('aircraft_lessee_info',$lessee->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) --}}
					  @endif
					  @if($role=='Chief Admin'||$role=='Director'||$role=='Deputy Director'||$role=='Inspector')

						{{ HTML::linkAction('AircraftController@approve', '',array('aircraft_lessee_info',$lessee->id), array('class' => 'glyphicon glyphicon-ok','style'=>'color:green;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@notApprove', '',array('aircraft_lessee_info',$lessee->id), array('class' => 'glyphicon glyphicon-ok','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@removeWarning', '',array('aircraft_lessee_info',$lessee->id), array('class' => 'glyphicon glyphicon-bell','style'=>'color:green;float:right;padding:5px;')) }}
						{{ HTML::linkAction('AircraftController@warning', '',array('aircraft_lessee_info',$lessee->id), array('class' => 'glyphicon glyphicon-bell','style'=>'color:red;float:right;padding:5px;')) }}
					   @endif
					   @if($role=='Chief Admin'||$role=='Maintenance Eng.')

						 <a data-toggle="modal" data-target="#editLesseeForm{{$lessee->id}}" href='' style='color:green;float:right;padding:5px;'>
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</a>
						@endif
						</span>
						    </th>
                         </tr>
						  
						@if($lessee->approve=='0')
						<tr>
							<th  colspan='2'> {{AircraftPrimaryInfo::notApproved($lessee)}}</th>	
						 </tr>
						 @endif
						 @if($lessee->warning=='1')
						 <tr  >
						 <th colspan='2'>{{AircraftPrimaryInfo::warning($lessee)}}	</th>
						 </tr>  
						 @endif
						<tr>
							<td class="col-md-3">									
								Lessee
							</td>
							<td>{{$lessee->lessee}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">									
								Effective Date
							</td>
							<td>{{$lessee->lessee_effective_date.' '.$lessee->lessee_effective_month.' '.$lessee->lessee_effective_year}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">									
								Address #1
							</td>
							<td>{{$lessee->lessee_address1}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">									
								Address #2
							</td>
							<td>{{$lessee->lessee_address2}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">									
								Phone
							</td>
							<td>{{$lessee->lessee_phone}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">									
								Fax
							</td>
							<td>{{$lessee->lessee_fax}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">									
								Email
							</td>
							<td>{{$lessee->lessee_email}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">									
								City
							</td>
							<td>{{$lessee->lessee_city}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">									
								State/Province
							</td>
							<td>{{$lessee->lessee_state_or_province}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">									
								Postal Code
							</td>
							<td>{{$lessee->lessee_postal_code}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">									
								Country
							</td>
							<td>{{$lessee->lessee_country}}  </td>
						</tr>
                           
                        
                        </tbody>
					@endforeach
                    </table>
					
                </div>
                <!-- /.box-body -->
                               
                          </div><!-- /.box -->
						</div>
		

</div>
{{--End Aircraft lesseeData Information--}}
{{--Aircraft insurerData Information--}}
 <div class="row" >
                        
		
                 <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary ">
							 <div class="box-header col-md-6">
									<h3 class="box-title">Aircraft Insurer Information</h3>
							  </div>
							  <div class='col-md-6'>
							  
							  </div>
                <!-- /.box-header -->
					<div style='display:none'>
					{{$num=0;}}
					</div>
					<div class="box-body">
					
                    <table class="table table-bordered">
					 @foreach($insurerData as $insurer)
					   <tbody>						
                         <tr>
							<th colspan='2'>Exemption Information #{{++$num}} 
							 <span class='hidden-print'>
						@if($role=='Chief Admin'||$role=='Director')

						{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('aircraft_insurer_info',$insurer->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('aircraft_insurer_info',$insurer->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{-- HTML::linkAction('AircraftController@undoSoftDelete', 'Undo.D',array('aircraft_insurer_info',$insurer->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) --}}
					  @endif
					  @if($role=='Chief Admin'||$role=='Director'||$role=='Deputy Director'||$role=='Inspector')

						{{ HTML::linkAction('AircraftController@approve', '',array('aircraft_insurer_info',$insurer->id), array('class' => 'glyphicon glyphicon-ok','style'=>'color:green;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@notApprove', '',array('aircraft_insurer_info',$insurer->id), array('class' => 'glyphicon glyphicon-ok','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@removeWarning', '',array('aircraft_insurer_info',$insurer->id), array('class' => 'glyphicon glyphicon-bell','style'=>'color:green;float:right;padding:5px;')) }}
						{{ HTML::linkAction('AircraftController@warning', '',array('aircraft_insurer_info',$insurer->id), array('class' => 'glyphicon glyphicon-bell','style'=>'color:red;float:right;padding:5px;')) }}
						 @endif
						 @if($role=='Chief Admin'||$role=='Maintenance Eng.')

						 <a data-toggle="modal" data-target="#editInsurerForm{{$insurer->id}}" href='' style='color:green;float:right;padding:5px;'>
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</a>
						@endif
						</span>
							</th>
                         </tr>
						 @if($insurer->approve=='0')
						<tr>
							<th  colspan='2'> {{AircraftPrimaryInfo::notApproved($insurer)}}</th>	
						 </tr>
						 @endif
						 @if($insurer->warning=='1')
						 <tr  >
						 <th colspan='2'>{{AircraftPrimaryInfo::warning($insurer)}}	</th>
						 </tr>  
						 @endif
						<tr>
							<td class="col-md-3">
							Insurer Info
							</td>
							<td>{{$insurer->insurer_name}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Name Insured
							</td>
							<td>{{$insurer->name_insured}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Address #1
							</td>
							<td>{{$insurer->insurer_address1}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Address #2
							</td>
							<td>{{$insurer->insurer_address2}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Phone
							</td>
							<td>{{$insurer->insurer_phone}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Fax
							</td>
							<td>{{$insurer->insurer_fax}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Email
							</td>
							<td>{{$insurer->insurer_email}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							City
							</td>
							<td>{{$insurer->insurer_city}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							State/Province
							</td>
							<td>{{$insurer->insurer_state_or_province}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Postal Code
							</td>
							<td>{{$insurer->insurer_postal_code}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Country
							</td>
							<td>{{$insurer->insurer_country}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Liability Amount
							</td>
							<td>{{$insurer->insurer_liability_amount}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Effective Date
							</td>
							<td>{{$insurer->insurer_effective_date.' '.$insurer->insurer_effective_month.' '.$insurer->insurer_effective_year}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Expiration Date
							</td>
							<td>{{$insurer->insurer_expiration_date.' '.$insurer->insurer_expiration_month.' '.$insurer->insurer_expiration_year}}  </td>
						</tr>
						
                        </tbody>
					@endforeach
                    </table>
					
                </div>
                <!-- /.box-body -->
                               
                          </div><!-- /.box -->
						</div>
		

</div>
{{--End Aircraft Insurer Information--}}
{{--Aircraft equipmentData Information--}}
 <div class="row" >
                        
		
                 <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary ">
							 <div class="box-header col-md-6">
									<h3 class="box-title">Aircraft Equipment Review Information</h3>
							  </div>
							  <div class='col-md-6'>
							  
							  </div>
                <!-- /.box-header -->
					<div style='display:none'>
					{{$num=0;}}
					</div>
					<div class="box-body">
					
                    <table class="table table-bordered">
					 @foreach($equipmentData as $equipment)
					   <tbody>						
                         <tr>
							<th colspan='2'>Exemption Information #{{++$num}}
							 <span class='hidden-print'>
							 @if($role=='Chief Admin'||$role=='Director')

						{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('aircraft_equipment_review_info',$equipment->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('aircraft_equipment_review_info',$equipment->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{-- HTML::linkAction('AircraftController@undoSoftDelete', 'Undo.D',array('aircraft_equipment_review_info',$equipment->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) --}}
					      @endif
						  @if($role=='Chief Admin'||$role=='Director'||$role=='Deputy Director'||$role=='Inspector')

						{{ HTML::linkAction('AircraftController@approve', '',array('aircraft_equipment_review_info',$equipment->id), array('class' => 'glyphicon glyphicon-ok','style'=>'color:green;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@notApprove', '',array('aircraft_equipment_review_info',$equipment->id), array('class' => 'glyphicon glyphicon-ok','style'=>'color:red;float:right;padding:5px;')) }}
						
						{{ HTML::linkAction('AircraftController@removeWarning', '',array('aircraft_equipment_review_info',$equipment->id), array('class' => 'glyphicon glyphicon-bell','style'=>'color:green;float:right;padding:5px;')) }}
						{{ HTML::linkAction('AircraftController@warning', '',array('aircraft_equipment_review_info',$equipment->id), array('class' => 'glyphicon glyphicon-bell','style'=>'color:red;float:right;padding:5px;')) }}
						@endif
						@if($role=='Chief Admin'||$role=='Maintenance Eng.')

						 <a data-toggle="modal" data-target="#editEquipmentReviewForm{{$equipment->id}}" href='' style='color:green;float:right;padding:5px;'>
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</a>
						@endif
						</span>
									</th>
                         </tr> 
						  @if($equipment->approve=='0')
						<tr>
							<th  colspan='2'> {{AircraftPrimaryInfo::notApproved($equipment)}}</th>	
						 </tr>
						 @endif
						 @if($equipment->warning=='1')
						 <tr  >
						 <th colspan='2'>{{AircraftPrimaryInfo::warning($equipment)}}	</th>
						 </tr>  
						 @endif
						<tr>
							<td class="col-md-3">
							Review Date
							</td>
							<td>{{$equipment->review_date.' '.$equipment->review_month.' '.$equipment->review_year}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Active
							</td>
							<td>{{$equipment->review_active}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Purpose Of Review
							</td>
							<td>{{$equipment->purpose_of_review}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Location
							</td>
							<td>{{$equipment->location}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Airframe Hours
							</td>
							<td>{{$equipment->airframe_hours}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Engine #1 Hours
							</td>
							<td>{{$equipment->engine1_hours}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Engine #2 Hours
							</td>
							<td>{{$equipment->engine2_hours}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Engine #1 TSO
							</td>
							<td>{{$equipment->engine1_TSO}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Engine #2 TSO
							</td>
							<td>{{$equipment->engine2_TSO}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Engine #1 MMS
							</td>
							<td>{{$equipment->engine1_MMS}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Engine #2 MMS
							</td>
							<td>{{$equipment->engine2_MMS}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Prop Rotor1 MMS
							</td>
							<td>{{$equipment->prop_rotor1_MMS}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Prop Rotor2 MMS
							</td>
							<td>{{$equipment->prop_rotor2_MMS}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Governor #1 MMS
							</td>
							<td>{{$equipment->governor1_MMS}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Governor #2 MMS
							</td>
							<td>{{$equipment->governor2_MMS}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							NAV #1 MMS
							</td>
							<td>{{$equipment->nav1_MMS}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
								GPS MM
							</td>
							<td>{{$equipment->gps_mm}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
								ADF MM
							</td>
							<td>{{$equipment->adf_mm}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
								ILS MM
							</td>
							<td>{{$equipment->ils_mm}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
								VNAV MM
							</td>
							<td>{{$equipment->vnav_mm}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
								Comm #1 MM
							</td>
							<td>{{$equipment->comm1_mm}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
								Comm #2 MM
							</td>
							<td>{{$equipment->comm2_mm}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
								Lr Comm MM
							</td>
							<td>{{$equipment->lr_comm_mm}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
								TCAS MM
							</td>
							<td>{{$equipment->tcas_mm}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
								Transponder MM
							</td>
							<td>{{$equipment->transponder_mm}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
								Transponder Mode
							</td>
							<td>{{$equipment->transponder_mode}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
								FDR MM
							</td>
							<td>{{$equipment->fdr_mm}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
								FDR Mode
							</td>
							<td>{{$equipment->fdr_mode}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
								FDR Pinger Type
							</td>
							<td>{{$equipment->fdr_pinger_type}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							CVR MM
							</td>
							<td>{{$equipment->cvr_mm}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							ELT MM
							</td>
							<td>{{$equipment->elt_mm}}  </td>
						</tr>
						<tr>
							<td class="col-md-3">
							Note
							</td>
							<td>{{$equipment->note}}  </td>
						</tr>
				
                           
                        
                        </tbody>
					@endforeach
                    </table>
					
                </div>
                <!-- /.box-body -->
                               
                          </div><!-- /.box -->
						</div>
		

</div>
{{--End Aircraft Equipment Review Information--}}
<a class="btn btn-primary hidden-print"id='printOption'href="javascript:void();" onclick=" myFunction(); return true;">Print/Save</a>
</section>

<script>
function myFunction() {
    window.print();
}
</script>

</section>
 
	{{--Edit Form--}}
						@include('aircraft/editForm')
							@yield('editPrimaryInfoForm')
							@yield('editTCIForm')
							@yield('editSTCForm')
							@yield('editExemptionForm')
							@yield('editRegistrationInfoForm')
							@yield('editACForm')
							@yield('editApprovalForm')
							@yield('editOwnerForm')
							@yield('editLesseeForm')
							@yield('editInsurerForm')
							@yield('editEquipmentReviewForm')
   {{--End Edit Form--}}
@stop