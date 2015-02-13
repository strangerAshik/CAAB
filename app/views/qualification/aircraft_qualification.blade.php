@extends('layout')
@section('content')
 
<section class="content" style="max-width:760px;margin:0 auto;">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">CAA EMPLOYEE AIRCRAFT QUALIFICATION</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					
					</div>
					<div class="box-body">
					@foreach($infos as $info)
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th colspan='2'>Aircraft Qualification  #{{++$a_sl}}
                                    <a href='' style='color:red;float:right;padding:5px;'>
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                    <a href='' style='color:green;float:right;padding:5px;'>
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <td style="width:50%">Active</td>
                                <td style="width:50%">{{$info->active}}</td>
                            </tr>
                            <tr>
                                <td>Qualification Type</td>
                                <td>{{$info->qualification_type}}</td>
                            </tr>
                            <tr>
                                <td>Total Hours</td>
                                <td>{{$info->total_hours}}</td>
                            </tr>
							<tr>
                                <td>Aircraft MM</td>
                                <td> {{$info->aircraft_mm}}</td>
                            </tr>
                            <tr>
                                <td>Aircraft MSN</td>
                                <td>{{$info->aircraft_msm}}</td>
                            </tr>
                            <tr>
                                <td>Completion Date </td>
                                <td>{{$info->completion_date." ".$info->completion_month." ".$info->completion_year}}</td>
                            </tr>
							<tr>
                                <td>Status</td>
                                <td>{{$info->status}}</td>
                            </tr>
							<tr>
                                <td>Training Institute</td>
                                <td>{{$info->institute}}</td>
                            </tr>
							<tr>
                                <td>Instructor name</td>
                                <td>{{$info->instructor}}</td>
                            </tr>
							<tr>
                                <td>Certificate Issued</td>
                                <td>{{$info->proof}}</td>
                            </tr>
							<tr>
                                <td>Management Certification</td>
                                <td>{{$info->certification}}</td>
                            </tr>
							
                        </tbody>
                    </table>
					@endforeach
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
    <!--Button for popup-->
    <p class="text-center">
        <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#EmploymentDetails">Add New</button>
    </p>
    <!-- start of oppup content-->
    <div class="modal fade" id="EmploymentDetails" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">ADD CAA EMPLOYEE AIRCRAFT QUALIFICATION</h4>
                </div>
                <div class="modal-body">
                    <!-- The form is placed inside the body of modal -->
                    {{Form::open(array('url'=>'qualification/saveAircraftQualification','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form','files'=>true))}}
                        <div class="form-group required">
                                           
											{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
										<div class="radio">
									 
									  <label> <label> {{ Form::radio('active', 'Yes') }} &nbsp  Yes</label>
									 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
									</div>
									
								</div>
                        </div>
						<div class="form-group required">
                                        
											{{Form::label('qualification_type', 'Qualification Type', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('qualification_type', array('' => '--Select--', 'Aircraft Initial' => 'Aircraft Initial','Aircraft Recurrent'=>'Aircraft Recurrent','Flight Proficiency '=>'Flight Proficiency','Recency of Experience '=>'Recency of Experience','Aircraft System'=>'Aircraft System','Recurrent Qualification'=>'Recurrent Qualification'), null,array('class'=>'form-control','id'=>'category','required'=>''))}}
											</div>
											
						</div>
						<div class="form-group ">
                                           
											{{Form::label('total_hours', 'Total Hours', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
											{{Form::text('total_hours','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
                        </div>
						<div class="form-group required">
                                        
											{{Form::label('aircraft_mm', 'Aircraft MM', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											
											{{Form::text('aircraft_mm','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
						</div>
						<div class="form-group required">
                                        
											{{Form::label('', 'Aircraft MSN', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											
											{{Form::text('aircraft_msm','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
						</div>
						<div class="form-group required">
												
													{{Form::label('completion_date', 'Completion Date', array('class' => 'col-xs-4 control-label'))}}
												
													<div class="row">
														<div class="col-xs-2">
														{{Form::select('completion_date', $dates, '0',array('class'=>'form-control'))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('completion_month',$months,'0',array('class'=>'form-control'))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('completion_year',$years, '0',array('class'=>'form-control'))}}
														</div>
													</div>
						</div>
						<div class="form-group ">
                                        
											{{Form::label('status', 'Status', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('status', array('' => '--Select--', 'Training' => 'Training','OJT'=>'OJT','Workshop'=>'Workshop'), null,array('class'=>'form-control','id'=>'category','required'=>''))}}
											</div>
											
						</div>
						<div class="form-group ">
                                           
											{{Form::label('institute', 'Training Institute', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
											{{Form::text('institute','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
                        </div>
						<div class="form-group ">
                                           
											{{Form::label('instructor', 'Instructor name', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
											{{Form::text('instructor','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
                        </div>
						
						 <div class="form-group required">
                                           
											{{Form::label('', 'Certificate Issued', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
										<div class="radio">
									 
									  <label> <label> {{ Form::radio('proof', 'Yes') }} &nbsp  Yes</label>
									 <label> {{ Form::radio('proof', 'No') }} &nbsp  No</label>
									</div>
									
								</div>
                        </div>
					
					<div class="form-group ">											
											{{Form::label('certification', 'Management Certification', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
										
											{{Form::select('certification', array('' => '--Select--', 'Verified'=>'Verified','Non verified'=>'Non verified'), null,array('class'=>'form-control'))}}
											</div>
											
					</div>
					<div class="form-group ">
                                           
                                            
											 {{ Form::label('pdf', 'Upload PDF Document: ',array('class'=>'control-label col-xs-4')) }}
											 <div class="col-xs-6">
											 {{ Form::file('pdf') }}
											 
											 
											 </div>
                    </div>
						
						
						
					
                       
                        <div class="form-group">
                            <div class="col-xs-5 col-xs-offset-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
						{{Form::close()}}
                </div>
            </div>
        </div>
    </div>
    <script>
$(document).ready(function(){
  
 
  
});
</script>



@stop