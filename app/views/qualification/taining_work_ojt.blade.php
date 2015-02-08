@extends('layout')
@section('content')
 <section class="content" style="max-width:760px;margin:0 auto;">
                    <div class="row">
                        <div class="col-md-12">
							<div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Training/ Workshop/ OJT  </h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table class="table table-bordered">
                                        <tbody>
										<tr>                                           
                                            <th >Training/ Workshop/ OJT  #01</th>
                                            <th >
											<a href='' style='color:red;float:right;padding:5px;'><span class="glyphicon glyphicon-trash"></span></a>
											<a href='' style='color:green;float:right;padding:5px;'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
											</th>
                                        </tr>
                                        <tr>
                                           
                                            <td>Category</td>
                                            <td>Geomark Limited  </td>
                                            
                                        </tr>
                                        
										<tr>
                                           
                                            <td>
												Major Area
											</td>
                                            <td>
                                                Private company
                                            </td>
                                            
                                        </tr>
										<tr>
                                           
                                            <td>
											Instructor:
											</td>
                                            <td>
                                               Geomark Limitedfkdshkg
                                            </td>
                                            
                                        </tr> 
										<tr>
                                            <td>
												
												Institute:
											</td>
                                            <td>
                                                GIS & Remote Sensing Consultant
                                            </td>
                                            
                                        </tr>
										<tr>
                                            <td>												
												Location:
											</td>
                                            <td>
                                               (1) Consulting land use and socio-economic survey works with adaptation of GIS analysis. 
												
                                            </td>
                                            
                                        </tr>
										<tr>
                                            <td>
												Proof of completion:
											</td>
                                            <td>
                                                A.N.M Safiqul Islam Shahin
                                            </td>
                                            
                                        </tr>
										<tr>
                                            <td>
												Management Certification:
											</td>
                                            <td>
                                                 01716291050
                                            </td>
                                            
                                        </tr>
										<tr>
                                            <td>
												Duration:
											</td>
                                            <td>
                                                 2 months
                                            </td>
                                            
                                        </tr>
										
                                            
                                       
                                    </tbody></table>
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
                <form id="#" method="post" class="form-horizontal" data-toggle="validator" role="form">

					
					<div class="form-group required">
                                        
											{{Form::label('', 'Category', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('', array('' => '--Select--', 'Training' => 'Training','OJT'=>'OJT','Workshop'=>'Workshop'), null,array('class'=>'form-control','id'=>'category','required'=>''))}}
											</div>
											
                    </div>
					<!--IF training -->
					<div id='training' style='display:none;'>
					<div class="form-group required">
                                        
											{{Form::label('', 'Type of Training', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('size', array('' => '--Select--', 'Formal Training' => 'Formal Training','Class Room'=>'Class Room','Others'=>'Others'), null,array('class'=>'form-control'))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                           
											{{Form::label('', 'Training Course', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                           
											{{Form::label('', 'Subject', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					</div>
					<!--end training -->
					<!--If workshop / seminar -->
					<div id='workshop' style='display:none;'> 
					<div class="form-group required">
                                           
											{{Form::label('', 'Topic', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					
					<!--end workshop / seminar -->
					</div>
					<!--If OJT -->
					<div id='ojt' style='display:none;'> 
						<div class="form-group required required">
                                           
											{{Form::label('', 'Training Task', array('class' => 'col-xs-4 control-label '))}}
											<div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
						</div>
					</div>
					<!--End OJT -->
					<!--Start Common content-->
					<div class="form-group required">
                                           
											{{Form::label('', 'Major Area', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                           
											{{Form::label('', 'Instructor', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group  required">
                                           
											{{Form::label('', 'Institute', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required" >											
											{{Form::label('', 'Location', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('m_address','', array('class' => 'form-control','placeholder'=>'','size'=>'30x3'))}}
											</div>
					</div>
					<div class="form-group required">											
											{{Form::label('', 'Proof of completion', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('m_address','', array('class' => 'form-control','placeholder'=>'','size'=>'30x3'))}}
											</div>
					</div>
					<div class="form-group required">											
											{{Form::label('', 'Management Certification', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('m_address','', array('class' => 'form-control','placeholder'=>'','size'=>'30x3'))}}
											</div>
					</div>
					<div class="form-group required">											
											{{Form::label('', 'Duration', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
					</div>
					<!--End Common content-->
					
                    

                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
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
	 else{}
	 //else $("#out_of").prop('disabled', true);
	 
});
  
});
</script>



@stop