@extends('layout')
@section('content-header')
 <section class="content-header">
                    <h1>
                        Qualification
                        <small>Employee Education</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Qualification</a></li>
                        <li class="active">Education</li>
                    </ol>
</section>
@stop
@section('content')
<section class="content" style="max-width:760px;margin:0 auto;">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                           
											{{Form::label('', ' Level [highest degree first]', array('class' => ''))}}
											{{Form::select('size', array('0' => '--Select--', 'Mr.' => 'Mr.','Ms.'=>'Ms.','Dr.'=>'Dr.','Prof.'=>'Prof.'), '0',array('class'=>'form-control'))}}
											
                                        </div>
										
										<div class="form-group">
											{{Form::label('', ' Educational institute', array('class' => ''))}}
											{{Form::text('f_name','', array('class' => 'form-control','placeholder'=>''))}}
										</div>
										
										 
										
										<div class="form-group">
                                           
											{{Form::label('', ' Passing year', array('class' => ''))}}
											{{Form::selectYear('year',1950,2015, '1950',array('class'=>'form-control'))}}
											
                                        </div>
										<div class="form-group">
                                           
											{{Form::label('', 'Result Standard ', array('class' => ''))}}
											{{Form::select('size', array('0' => '--Select--', 'Grade' => 'Grade','CGPA'=>'CGPA','Division'=>'Division','Class'=>'Class','Percentage'=>'Percentage'), '0',array('class'=>'form-control'))}}
											
                                        </div>
										 
										<div class="form-group">
											{{Form::label('', ' Result', array('class' => ''))}}
											{{Form::text('result','', array('class' => 'form-control','placeholder'=>''))}}
										</div>
                                      
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->
						</div>
	</section>
	
@stop
