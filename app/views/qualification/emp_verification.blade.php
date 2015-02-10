@extends('layout')
@section('content')
 
<section class="content" style="max-width:760px;margin:0 auto;">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Employee verification</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					
					</div>
					<div class="box-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th >Employee verification #01</th>
                                <th >
                                    <a href='' style='color:red;float:right;padding:5px;'>
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                    <a href='' style='color:green;float:right;padding:5px;'>
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>Mr.x</td>
                            </tr>
                            <tr>
                                <td>Employee ID</td>
                                <td>CAAB-1324</td>
                            </tr>
                            <tr>
                                <td>Date Of Entry</td>
                                <td>14 January 2013</td>
                            </tr>
							<tr>
                                <td>Active</td>
                                <td> Yes</td>
                            </tr>
                            <tr>
                                <td>Termination Date</td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Position </td>
                                <td>Pilot</td>
                            </tr>
							<tr>
                                <td>Note </td>
                                <td>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
								</td>
                            </tr>
							
                        </tbody>
                    </table>
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
                    <h4 class="modal-title">Add Employee verification </h4>
                </div>
                <div class="modal-body">
                    <!-- The form is placed inside the body of modal -->
                    <form id="#" method="post" class="form-horizontal" data-toggle="validator" role="form">
                        
						<div class="form-group required">
                                           
											{{Form::label('', 'Name', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
                        </div>
						<div class="form-group required">
                                           
											{{Form::label('', 'Employee ID', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
                        </div>
						<div class="form-group required">
												
													{{Form::label('', 'Date Of Entry', array('class' => 'col-xs-4 control-label'))}}
												
													<div class="row">
														<div class="col-xs-2">
														{{Form::selectRange('range', 1, 31,1,array('class'=>'form-control'))}}
														</div>
														<div class="col-xs-2">
														{{Form::selectMonth('month',1,array('class'=>'form-control'))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::selectYear('year', 1950, 2015,1950,array('class'=>'form-control'))}}
														</div>
													</div>
						</div>
						<div class="form-group required">
                                           
											{{Form::label('', 'Active', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
										<div class="radio">
									 
									  <label> <label> {{ Form::radio('active', 'Yes') }} &nbsp  Yes</label>
									 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
									</div>
									
								</div>
                        </div>
						<div class="form-group">
												
													{{Form::label('', 'Termination Date', array('class' => 'col-xs-4 control-label'))}}
												
													<div class="row">
														<div class="col-xs-2">
														{{Form::selectRange('range', 1, 31,1,array('class'=>'form-control'))}}
														</div>
														<div class="col-xs-2">
														{{Form::selectMonth('month',1,array('class'=>'form-control'))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::selectYear('year', 1950, 2015,1950,array('class'=>'form-control'))}}
														</div>
													</div>
						</div>
						<div class="form-group required">
                                           
											{{Form::label('', 'Position', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
                        </div>
						<div class="form-group " >											
											{{Form::label('', 'Note', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('m_address','', array('class' => 'form-control','placeholder'=>'','size'=>'30x3'))}}
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
$(document).ready(function(){
  
 
  
});
</script>



@stop