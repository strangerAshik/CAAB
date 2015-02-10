@extends('layout')
@section('content')
 <section class="content" style="max-width:760px;margin:0 auto;">
                    <div class="row">
                        <div class="col-md-12">
							<div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Employment History </h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table class="table table-bordered">
                                        <tbody>
										<tr>                                           
                                            <th >Previous Employment #01</th>
                                            <th >
											<a href='' style='color:red;float:right;padding:5px;'><span class="glyphicon glyphicon-trash"></span></a>
											<a href='' style='color:green;float:right;padding:5px;'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
											</th>
                                        </tr>
                                        <tr>
                                           
                                            <td>Name of organization</td>
                                            <td>Geomark Limited  </td>
                                            
                                        </tr>
                                        
										<tr>
                                           
                                            <td>
												Type of organization
											</td>
                                            <td>
                                                Private company
                                            </td>
                                            
                                        </tr>
										<tr>
                                           
                                            <td>
												
												Address of organization:
											</td>
                                            <td>
                                               Geomark Limited, House-23, Road-12, Pisci Culture Housing, Muhammadpur, Dhaka 
                                            </td>
                                            
                                        </tr> 
										<tr>
                                            <td>
												
												Designation
											</td>
                                            <td>
                                                GIS & Remote Sensing Consultant
                                            </td>
                                            
                                        </tr>
										<tr>
                                            <td>												
												Major responsibilities:
											</td>
                                            <td>
                                               (1) Consulting land use and socio-economic survey works with adaptation of GIS analysis. 
												(2) GIS technology adaptation for survey and decision making organization
												(3) Map production, interpretation, anlysis and report generation supervising for project.
												(4) Project mangement and supervision
                                            </td>
                                            
                                        </tr>
										<tr>
                                            <td>
												Name of supervisor:
											</td>
                                            <td>
                                                A.N.M Safiqul Islam Shahin
                                            </td>
                                            
                                        </tr>
										<tr>
                                            <td>
												Telephone of supervisor:
											</td>
                                            <td>
                                                 01716291050
                                            </td>
                                            
                                        </tr>
										<tr>
                                            <td>
												Date of joining:
											</td>
                                            <td>
                                                 01 Mar 2012
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
                <h4 class="modal-title">Employment Details </h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                <form id="#" method="post" class="form-horizontal">

					<div class="form-group">
                                           
											{{Form::label('', 'Name Of Organisation', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group">
                                        
											{{Form::label('', 'Type of organization', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('size', array('' => '--Select--', 'International' => 'International','Multinational'=>'Multinational','Government organization'=>'Government organization','Public limited company'=>'Public limited company','Private company'=>'Private company','Others'=>'Others'), null,array('class'=>'form-control'))}}
											</div>
											
                    </div>
					<div class="form-group">
                                        
											{{Form::label('', 'Address of organization', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('m_address','', array('class' => 'form-control','placeholder'=>'','size'=>'30x3'))}}
											</div>
											
                    </div>
					
					<div class="form-group">
                                           
											{{Form::label('', 'Your designation', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					
					<div class="form-group">
                                        
											{{Form::label('', 'Major responsibilities', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('m_address','', array('class' => 'form-control','placeholder'=>'','size'=>'30x3'))}}
											</div>
											
                    </div>
					
					<div class="form-group">
												
													{{Form::label('', 'Start Date', array('class' => 'col-xs-4 control-label'))}}
												
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
					<!--<div class="form-group">
                                           
											{{Form::label('', 'Till date', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::checkbox('name', 'value',array('id'=>'checkbox_check'))}}
											</div>
											
                    </div>-->
					<div class="form-group">
												
													{{Form::label('', 'End Date', array('class' => 'col-xs-4 control-label'))}}
												
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
					
					 <div class="form-group">
                                           
											{{Form::label('', ' Name of supervisor', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('national_id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group">
                                           
											{{Form::label('', 'Telephone of supervisor', array('class' => 'col-xs-4 control-label'))}}
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