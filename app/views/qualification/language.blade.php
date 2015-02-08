@extends('layout')
@section('content')
 
<section class="content" style="max-width:760px;margin:0 auto;">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Language</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					<table class="table table-bordered">
						 <th >Mother Language</th><td>Bangle</td><th >
                                    <a href='' style='color:red;float:right;padding:5px;'>
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                    <a href='' style='color:green;float:right;padding:5px;'>
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                </th>
					</table>
					</div>
					<div class="box-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th >Other Language  #01</th>
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
                                <td>Language</td>
                                <td>English</td>
                            </tr>
                            <tr>
                                <td>Speak</td>
                                <td>Fluent</td>
                            </tr>
                            <tr>
                                <td>Understand</td>
                                <td> Fluent</td>
                            </tr>
                            <tr>
                                <td>Read</td>
                                <td>Fluent</td>
                            </tr>
                            <tr>
                                <td>Write</td>
                                <td>Fluent</td>
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
                                           
											{{Form::label('', 'Language', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
                            </div>
						<div class="form-group required">
                                        
											{{Form::label('', 'Speaking ability', array('class' => 'col-xs-4 control-label'))}}
											
                            <div class="col-xs-6">
											{{Form::select('', array('' => '--Select--', 'Fluent' => 'Fluent','Moderate'=>'Moderate','Not Fluent'=>'Not Fluent'), null,array('class'=>'form-control','id'=>'category','required'=>''))}}
							</div>
                        </div>
						<div class="form-group required">
                                        
											{{Form::label('', 'Understanding', array('class' => 'col-xs-4 control-label'))}}
											
                            <div class="col-xs-6">
											{{Form::select('', array('' => '--Select--', 'Fluent' => 'Fluent','Moderate'=>'Moderate','Not Fluent'=>'Not Fluent'), null,array('class'=>'form-control','id'=>'category','required'=>''))}}
							</div>
                        </div>
						<div class="form-group required">
                                        
											{{Form::label('', 'Reading ability', array('class' => 'col-xs-4 control-label'))}}
											
                            <div class="col-xs-6">
											{{Form::select('', array('' => '--Select--', 'Fluent' => 'Fluent','Moderate'=>'Moderate','Not Fluent'=>'Not Fluent'), null,array('class'=>'form-control','id'=>'category','required'=>''))}}
							</div>
                        </div>
						<div class="form-group required">
                                        
											{{Form::label('', ' Writing ability', array('class' => 'col-xs-4 control-label'))}}
											
                            <div class="col-xs-6">
											{{Form::select('', array('' => '--Select--', 'Fluent' => 'Fluent','Moderate'=>'Moderate','Not Fluent'=>'Not Fluent'), null,array('class'=>'form-control','id'=>'category','required'=>''))}}
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