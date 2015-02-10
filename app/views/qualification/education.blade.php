@extends('layout')
@section('content')
 <section class="content" style="max-width:760px;margin:0 auto;">
 
 
                    <div class="row">
                        <div class="col-md-12">
							<div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Academic Qualification  </h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table class="table table-bordered">
                                        <tbody>
										<tr>                                           
                                            <th >Academic Qualification   #01</th>
                                            <th >
											<a href='' style='color:red;float:right;padding:5px;'><span class="glyphicon glyphicon-trash"></span></a>
											<a href='' style='color:green;float:right;padding:5px;'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
											</th>
                                        </tr>
                                        <tr>
                                           
                                            <td>Level of Education </td>
                                            <td>Masters or Equivalent</td>
                                            
                                        </tr>
                                        
										<tr>
                                           
                                            <td>
												Name of Degree
											</td>
                                            <td>
                                                Name of Degree
                                            </td>
                                            
                                        </tr>
										<tr>
                                           
                                            <td>
											Educational Institue
											</td>
                                            <td>
                                               Educational Institue
                                            </td>
                                            
                                        </tr> 
										<tr>
                                            <td>
												Passing Year
											</td>
                                            <td>
                                                2009
                                            </td>
                                            
                                        </tr>
										<tr>
                                            <td>												
												Class/CGPA/ Grade/ Percentage 
											</td>
                                            <td>
                                               5.00
                                            </td>
                                            
                                        </tr>
										<tr>
                                            <td>
												Discipline
											</td>
                                            <td>
                                               Science
                                            </td>
                                            
                                        </tr>
										<tr>
                                            <td>
												Specialization
											</td>
                                            <td>
                                                 Geography
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
                <h4 class="modal-title">Add Academic Qualification </h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                <form id="#" method="post" class="form-horizontal" data-toggle="validator" role="form">

					
					<div class="form-group required">
                                        
											{{Form::label('', 'Level [highest degree first]', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('', array('0' => '--Select--', 'Post Doctorate or Equivalent' => 'Post Doctorate or Equivalent','Doctorate'=>'Doctorate','Masters or Equivalent'=>'Masters or Equivalent','Bachelors or Equivalent'=>'Bachelors or Equivalent','Diploma'=>'Diploma','H.S.C. or Equivalent'=>'H.S.C. or Equivalent','S.S.C. or Equivalent'=>'S.S.C. or Equivalent','Below S.S.C.'=>'Below S.S.C.'), 0,array('class'=>'form-control','id'=>'category','required'=>''))}}
											</div>
											
                    </div>
					
				
					<div class="form-group required">
                                        
											{{Form::label('', ' Name of degree', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('', 'Discipline', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('', array('0' => '--Select--', 'Arts' => 'Arts','Science'=>'Science','Commerce'=>'Commerce','Biological Science'=>'Biological Science','Business Studies/ Administration'=>'Business Studies/ Administration','Engineering/ Technology/ Applied Science'=>'Engineering/ Technology/ Applied Science','Medical Science'=>'Medical Science','Social Science'=>'Social Science'), null,array('class'=>'form-control','id'=>'category','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('', 'Specialization', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                           
											{{Form::label('', 'Educational institute', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                           
											{{Form::label('', ' Passing year', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::selectYear('year', 1950, 2015,'hello',array('class'=>'form-control'))}}
											</div>
											
                    </div>
					<div class="form-group required">
					{{Form::label('', 'Result', array('class' => 'col-xs-4 control-label'))}}
					<div class="row">
														<div class="col-xs-3">
														{{Form::select('Standard', array('0' => '--Select--', 'Grade' => 'Grade','CGPA'=>'CGPA','Division'=>'Division','Class'=>'Class','Percentage'=>'Percentage'), '0',array('class'=>'form-control','id'=>'Standard'))}}
														</div>
														<div class="col-xs-2">												
														{{Form::text('result','', array('class' => 'form-control','placeholder'=>''))}}
														</div>
														<div class="col-xs-2">
															{{Form::text('out_of','', array('class' => 'form-control','placeholder'=>'','disabled'=>'','id'=>'out_of'))}}
														</div>
													</div>
					</div>
					
					
					
                    

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
</section>
<section class="content" style="max-width:760px;margin:0 auto;">
 
 
                    <div class="row">
                        <div class="col-md-12">
							<div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Thesis/Project/Internship/Dissertation  </h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table class="table table-bordered">
                                        <tbody>
										<tr>                                           
                                            <th >Thesis/Project/Internship/Dissertation    #01</th>
                                            <th >
											<a href='' style='color:red;float:right;padding:5px;'><span class="glyphicon glyphicon-trash"></span></a>
											<a href='' style='color:green;float:right;padding:5px;'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
											</th>
                                        </tr>
                                        <tr>
                                           
                                            <td>Degree level</td>
                                            <td>Degree level</td>
                                            
                                        </tr>
                                        
										<tr>
                                           
                                            <td>
												Type
											</td>
                                            <td>
                                                Type
                                            </td>
                                            
                                        </tr>
										<tr>
                                           
                                            <td>
											Title
											</td>
                                            <td>
                                               Title
                                            </td>
                                            
                                        </tr> 
										<tr>
                                            <td>
												Institute
											</td>
                                            <td>
                                                Institute
                                            </td>
                                            
                                        </tr>
										<tr>
                                            <td>												
												Duration
											</td>
                                            <td>
                                              Duration
                                            </td>
                                            
                                        </tr>
										                            
                                       
                                    </tbody></table>
                                </div><!-- /.box-body -->
                            </div>    
                            </div>    
                            </div>    
                           
							
							
						

<!--Button for popup-->
<p class="text-center">
    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#Thesis">Add New</button>
	
</p>
<!-- start of oppup content-->
<div class="modal fade" id="Thesis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                        
											{{Form::label('', ' Degree level', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('', array('0' => '--Select--', 'Doctorate' => 'Doctorate','Masters or Equivalent'=>'Masters or Equivalent','Bachelors or Equivalent'=>'Bachelors or Equivalent'), null,array('class'=>'form-control','id'=>'','required'=>''))}}
											</div>
											
                    </div>
					
					<div class="form-group required">
                                        
											{{Form::label('', 'Type ', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('size', array('' => '--Select--', 'Thesis' => 'Thesis','Project'=>'Project','Internship'=>'Internship','Dissertation'=>'Dissertation'), null,array('class'=>'form-control'))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                           
											{{Form::label('', 'Title', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                           
											{{Form::label('', 'Institute', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					 
					<div class="form-group required">
                                           
											{{Form::label('', 'Duration', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					
					
					
                    

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
</section>

<script>
$(document).ready(function(){
  $("select#Standard").change(function(){
     var standard=$( "#Standard option:selected" ).text();
	 if(standard=='Grade'){$("#out_of").prop('disabled', false);}
	 else $("#out_of").prop('disabled', true);
	 
});
  
});
</script>



@stop