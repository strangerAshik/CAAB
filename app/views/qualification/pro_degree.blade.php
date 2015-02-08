@extends('layout')
@section('content')
 <section class="content" style="max-width:760px;margin:0 auto;">
                    <div class="row">
                        <div class="col-md-12">
							<div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Professional Degree </h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table class="table table-bordered">
                                        <tbody>
										<tr>                                           
                                            <th >Name of professional degree</th>
                                            <th >Institute</th>
                                            <th >Duration</th>
                                            <th >Class/ Grade/ Percentage</th>
                                            <th >Major/Area</th>
                                            <th >Edit</th>
                                            <th >Delete</th>
                                            
                                        </tr>
                                        <tr>
                                           
                                            <td>Degree Name</td>
                                            <td>Institute</td>
                                            <td>2 years</td>
                                            <td>4.00 out of 5</td>
                                            <td>Information Technology </td>
                                            <td >
												<a href='' style='color:green'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
												
											</td>
                                            <td><a href='' style='color:red'><span class="glyphicon glyphicon-trash"></span></a> </td>
                                            
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
                <h4 class="modal-title">New Professional Degree </h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                <form id="#" method="post" class="form-horizontal">

					<div class="form-group">
                                           
											{{Form::label('', 'Name of professional degree', array('class' => 'col-xs-5 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group">
                                           
											{{Form::label('', 'Educational institute', array('class' => 'col-xs-5 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group">
                                           
											{{Form::label('', 'Duration', array('class' => 'col-xs-5 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group">
                                           
											{{Form::label('', 'Class/Grade/Percentage', array('class' => 'col-xs-5 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group">
                                           
											{{Form::label('', 'Major/Area', array('class' => 'col-xs-5 control-label'))}}
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

<script>

</script>



@stop