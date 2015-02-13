@extends('layout')
@section('content')
 <section class="content" style="max-width:760px;margin:0 auto;">
                    <div class="row">
                        <div class="col-md-12">
							<div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Training/ Workshop/ OJT  </h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
								@foreach($infos as $info)
                                    <table class="table table-bordered">
                                        <tbody>
										<tr>                                           
                                            <th colspan='2'>Training/ Workshop/ OJT  #{{++$a_sl}}
											<a href='' style='color:red;float:right;padding:5px;'><span class="glyphicon glyphicon-trash"></span></a>
											<a href='' style='color:green;float:right;padding:5px;'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
											</th>
                                        </tr>
                                        <tr>
                                           
                                            <td style="width:50%">Category</td>
                                            <td style="width:50%">{{$info->category}}</td>
                                            
                                        </tr>
                                        @if($info->category=='Training')
											<tr>
												<td>Type of Training</td><td>{{$info->type_of_training}}</td>
											</tr>
											<tr>
												<td>Type of Training</td><td>{{$info->training_course}}</td>
											</tr>
											<tr>
												<td>Subject</td><td>{{$info->subject}}</td>
											</tr>
										@endif
										@if($info->category=='OJT')
											<tr>
												<td>Training Task</td><td>{{$info->training_task}}</td>
											</tr>
											
											
										@endif
										@if($info->category=='Workshop')
											<tr>
												<td>Topic</td><td>{{$info->topic}}</td>
											</tr>
											
											
										@endif
										<tr>
                                           
                                            <td>
												Major Area
											</td>
                                            <td>
                                               {{$info->major_area}}
                                            </td>
                                            
                                        </tr>
										<tr>
                                           
                                            <td>
											Instructor(s):
											</td>
                                            <td>
                                               {{$info->instructor}}
                                            </td>
                                            
                                        </tr> 
										<tr>
                                            <td>
												
												Institute:
											</td>
                                            <td>
                                               {{$info->institute}}
                                            </td>
                                            
                                        </tr>
										<tr>
                                            <td>												
												Address:
											</td>
                                            <td>
                                               {{$info->location}}
												
                                            </td>
                                            
                                        </tr>
										<tr>
                                            <td>
												Certificate Issued:
											</td>
                                            <td>
                                               {{$info->proof}}
                                            </td>
                                            
                                        </tr>
										<tr>
                                            <td>
												Management Certification:
											</td>
                                            <td>
                                                {{$info->certification}}
                                            </td>
                                            
                                        </tr>
										<tr>
                                            <td>
												Duration:
											</td>
                                            <td>
                                                {{$info->duration}}
                                            </td>
                                            
                                        </tr>
										
                                            
                                       
                                    </tbody></table>
								@endforeach
                                </div><!-- /.box-body -->
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
                <h4 class="modal-title">Training/ Workshop/ OJT </h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                
				
				{{Form::open(array('url'=>'qualification/saveTrainingWorkOJT','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form','files'=>true))}}

					
					<div class="form-group required">
                                        
											{{Form::label('category', 'Category', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('category', array('' => '--Select--', 'Training' => 'Training','OJT'=>'OJT','Workshop'=>'Workshop'), null,array('class'=>'form-control','id'=>'category','required'=>''))}}
											</div>
											
                    </div>
					<!--IF training -->
					<div id='training' style='display:none;'>
					<div class="form-group required">
                                        
											{{Form::label('type_of_training', 'Type of Training', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('type_of_training', array('' => '--Select--', 'Class Room'=>'Class Room','CBT'=>'CBT','Others'=>'Others'), null,array('class'=>'form-control'))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                           
											{{Form::label('training_course', 'Training Course', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('training_course','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                           
											{{Form::label('subject', 'Subject', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('subject','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					</div>
					<!--end training -->
					<!--If workshop / seminar -->
					<div id='workshop' style='display:none;'> 
					<div class="form-group required">
                                           
											{{Form::label('topic', 'Topic', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('topic','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					
					<!--end workshop / seminar -->
					</div>
					<!--If OJT -->
					<div id='ojt' style='display:none;'> 
						<div class="form-group required required">
                                           
											{{Form::label('training_task', 'Training Task', array('class' => 'col-xs-4 control-label '))}}
											<div class="col-xs-6">
											{{Form::text('training_task','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
						</div>
					</div>
					<!--End OJT -->
					<!--Start Common content-->
					<div class="form-group required">											
											{{Form::label('duration', 'Duration', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('duration','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
					</div>
					<div class="form-group required">
                                           
											{{Form::label('major_area', 'Major Area', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('major_area','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('instructor', 'Instructor(s)', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('instructor','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group  required">
                                           
											{{Form::label('institute', 'Institute', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('institute','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group " >											
											{{Form::label('location', 'Address', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('location','', array('class' => 'form-control','placeholder'=>'','size'=>'30x3'))}}
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
					
					<!--End Common content-->
					
                    

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
  
  $("select#category").change(function(){
     var content=$( "#category option:selected" ).text();
	
	// alert(content)
	 if(content=='Training'){
		 $("#training").show();
		 $("#workshop").hide();
		 $("#ojt").hide();		 
		 }
	 else if(content=='OJT'){
		 $("#training").hide();
		 $("#workshop").hide();
		 $("#ojt").show();
	 }
	 else if(content=='Workshop'){
		 $("#training").hide();
		 $("#workshop").show();
		 $("#ojt").hide();
	 }
	 else{
		  $("#training").hile();
		 $("#workshop").hide();
		 $("#ojt").hide();	
		 
	 }
	 //else $("#out_of").prop('disabled', true);
	 
});
  
});
</script>



@stop