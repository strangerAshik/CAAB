@extends('layout')
@section('content')
 
<section class="content" style="max-width:760px;margin:0 auto;">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Reference</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					
					</div>
					<div class="box-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th >Reference  #01</th>
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
                                <td>Referee Type</td>
                                <td>Academic</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>Md.Ashikuzzman</td>
                            </tr>
                            <tr>
                                <td>Designation</td>
                                <td> Designation</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>Address</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>Phone</td>
                            </tr>
							<tr>
                                <td>Email</td>
                                <td>Email@gmail.com</td>
                            </tr>
							<tr>
                                <td>Referee Relation</td>
                                <td>No Relation</td>
                            </tr>
							<tr>
                                <td>Year Acquainted</td>
                                <td>3</td>
                            </tr>
							<tr>
                                <td>May we request a reference</td>
                                <td>Yes</td>
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
                    <h4 class="modal-title">Add Language </h4>
                </div>
                <div class="modal-body">
                    <!-- The form is placed inside the body of modal -->
                    <form id="#" method="post" class="form-horizontal" data-toggle="validator" role="form">
                        <div class="form-group required">
                                        
											{{Form::label('', 'Referee type', array('class' => 'col-xs-4 control-label'))}}
											
                            <div class="col-xs-6">
											{{Form::select('', array('' => '--Select--', 'Present supervisor' => 'Present supervisor','Past supervisor'=>'Past supervisor','Academic supervisor'=>'Academic supervisor'), null,array('class'=>'form-control','id'=>'category','required'=>''))}}
							</div>
                        </div>
						<div class="form-group required">
                                           
											{{Form::label('', 'Name', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
                        </div>
						<div class="form-group required">
                                           
											{{Form::label('', ' Designation', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
                        </div>
						
						<div class="form-group">
											{{Form::label('', ' Address', array('class' => 'col-xs-4 control-label'))}}
														
                                <div class="col-xs-6">
											{{Form::textarea('p_address','', array('class' => 'form-control','placeholder'=>'','size'=>'30x3'))}}
								</div>
						</div>
						<div class="form-group required">
                                           
											{{Form::label('', 'Telephone', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
                        </div>
						<div class="form-group required">
                                           
											{{Form::label('', '  Years acquainted', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
                        </div>
						<div class="form-group required">
                                           
											{{Form::label('', 'E-mail address', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
                        </div>
						
						<div class="form-group required">
                                        
											{{Form::label('', ' May we request a reference?', array('class' => 'col-xs-4 control-label'))}}
											
                            <div class="col-xs-6">
											{{Form::select('', array('' => '--Select--', 'At any time' => 'At any time','After offer of employment'=>'After offer of employment'), null,array('class'=>'form-control','id'=>'','required'=>''))}}
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