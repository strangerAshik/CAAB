@extends('layout')
@section('content-header')
 <section class="content-header">
                    <h1>
                        Qualification
                        <small>Employee Qualification</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Qualification</a></li>
                        <li class="active">Personnel</li>
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
                                           
											{{Form::label('', 'Title', array('class' => ''))}}
											{{Form::select('size', array('0' => '--Select--', 'Mr.' => 'Mr.','Ms.'=>'Ms.','Dr.'=>'Dr.','Prof.'=>'Prof.'), '0',array('class'=>'form-control'))}}
											
                                        </div>
										
										<div class="form-group">
											{{Form::label('', 'First Name', array('class' => ''))}}
											{{Form::text('f_name','', array('class' => 'form-control','placeholder'=>''))}}
										</div>
										<div class="form-group">
											{{Form::label('', 'Middle Name', array('class' => ''))}}
											{{Form::text('m_name','', array('class' => 'form-control','placeholder'=>''))}}
										</div>
										<div class="form-group">
											{{Form::label('', 'Last Name', array('class' => ''))}}
											{{Form::text('l_name','', array('class' => 'form-control','placeholder'=>''))}}
										</div>
										<div class="form-group">
											
											{{Form::label('', 'Mother\'s Name', array('class' => ''))}}
											{{Form::text('mo_name','', array('class' => 'form-control','placeholder'=>''))}}

										</div>
										<div class="form-group">
											{{Form::label('', 'Father\'s Name', array('class' => ''))}}
											{{Form::text('fa_name','', array('class' => 'form-control','placeholder'=>''))}}
										</div>
										<div class="form-group">											
											{{Form::label('', 'Mailing Address', array('class' => ''))}}
											{{Form::textarea('m_address','', array('class' => 'form-control','placeholder'=>'','size'=>'30x3'))}}
										</div>
										<div class="form-group">
											{{Form::label('', 'Permanent Address', array('class' => ''))}}
											{{Form::textarea('p_address','', array('class' => 'form-control','placeholder'=>'','size'=>'30x3'))}}
										</div>
										
                                        <div class="form-group">
											{{Form::label('', 'Telephone (work)', array('class' => ''))}}
											{{Form::text('w_tele','', array('class' => 'form-control','placeholder'=>''))}}
										</div>
										<div class="form-group">
											{{Form::label('', 'Telephone (residence)', array('class' => ''))}}
											{{Form::text('r_tele','', array('class' => 'form-control','placeholder'=>''))}}
										</div>
										<div class="form-group">
											{{Form::label('', 'Mobile no', array('class' => ''))}}
											{{Form::text('mobile','', array('class' => 'form-control','placeholder'=>''))}}
										</div>
										<div class="form-group">
											{{Form::label('', 'Nationality', array('class' => ''))}}
											{{Form::text('nationality','', array('class' => 'form-control','placeholder'=>''))}}
										</div>
										<div class="form-group">
											{{Form::label('', 'National ID', array('class' => ''))}}
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>''))}}
										</div>
										<div class="form-group">
                                           
											{{Form::label('', 'Sex', array('class' => ''))}}
											{{Form::select('size', array('' => '--Select--', 'Male' => 'Male','Female'=>'Female','Others'=>'Others'), null,array('class'=>'form-control'))}}
											
                                        </div>
										<div class="form-group">
                                           
											
											{{Form::label('exampleInputEmail1', 'Blood Group', array('class' => ''))}}
											{{Form::select('size', array('' => '--Select--', 'A+' => 'A+','A-'=>'A-','B+'=>'B+','B-'=>'B-','O+'=>'O+','O-'=>'O-','AB+'=>'AB+','AB-'=>'AB-','Unknown'=>'Unknown'), null,array('class'=>'form-control'))}}
                                            									
											
											
                                        </div>
										 
										<div class="form-group">
                                        <label>Date Of Birth</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
											
											
											{{Form::selectRange('range', 1, 31,1,array('class'=>'col-xs-4'))}}
											{{Form::selectMonth('month',1,array('class'=>'col-xs-4'))}}
											{{Form::selectYear('year', 1950, 2015,1950,array('class'=>'col-xs-4'))}}
                                          
                                        </div><!-- /.input group -->
                                    </div>
                                        <div class="form-group">
                                           
                                            
											 {{ Form::label('image', 'Upload Photo: ') }}
											 {{ Form::file('image') }}
											 <p class="help-block">Photo size : 300px250px</p>
                                        </div>
                                      
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->
						</div>
	</section>
	
@stop
