@extends('layout')
@section('content')
 <section class="content" style="max-width:760px;margin:0 auto;">
 
 
                    <div class="row">
                        <div class="col-md-12">
							<div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Publication</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
								@foreach($pubs as $pub)
                                    <table class="table table-bordered">
                                        <tbody>
										<tr>                                           
                                            <th colspan='2'>Publication   #{{++$a_sl}}
											<a href='' style='color:red;float:right;padding:5px;'><span class="glyphicon glyphicon-trash"></span></a>
											<a href='' style='color:green;float:right;padding:5px;'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
											</th>
                                        </tr>
                                        <tr>
                                           
                                            <td>{{$pub->title}}</td>
                                            <td>{{$pub->description}}</td>
                                            
                                        </tr>
                                        
                                    </tbody>
									</table>
								@endforeach
									  
                                </div><!-- /.box-body -->
                            </div>    
                            </div>    
                            </div>    
                           
							
							
						

<!--Button for popup-->
<p class="text-center">
    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#Publication">Add Publication</button>
	
</p>
<!-- start of oppup content-->
<div class="modal fade" id="Publication" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Publication </h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
               
				{{Form::open(array('url' => 'qualification/savePublication', 'method' => 'post', 'files'=>true, 'class'=>'form-horizontal','data-toggle'=>'validator', 'role'=>'form'))}}
					
					
					
				
					<div class="form-group required">
                                        
											{{Form::label('title', 'Title', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('title','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
											{{Form::label('description', 'Description', array('class' => 'control-label col-xs-4'))}}
											<div class="col-xs-6">
											{{Form::textarea('description','', array('class' => 'form-control','placeholder'=>'','size'=>'30x3'))}}
											 </div>
					</div>
					
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
</section>
<section class="content" style="max-width:760px;margin:0 auto;">
 
 
                    <div class="row">
                        <div class="col-md-12">
							<div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Membership</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
								@foreach($membs as $memb)
                                    <table class="table table-bordered">
                                        <tbody>
										<tr>                                           
                                            <th colspan='2'>Membership   #{{++$t_sl}}
											<a href='' style='color:red;float:right;padding:5px;'><span class="glyphicon glyphicon-trash"></span></a>
											<a href='' style='color:green;float:right;padding:5px;'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
											</th>
                                        </tr>
                                        <tr>
                                           
                                            <td>{{$memb->title}}</td>
                                            <td>{{$memb->description}}</td>
                                            
                                        </tr>
                                        
                                    </tbody>
									</table>
								@endforeach
                                </div><!-- /.box-body -->
                            </div>    
                            </div>    
                            </div>    
                           
							
							
						

<!--Button for popup-->
<p class="text-center">
    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#Thesis">Add Membership</button>
	
</p>
<!-- start of oppup content-->
<div class="modal fade" id="Thesis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Membership </h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
              {{Form::open(array('url' => 'qualification/saveMembership', 'method' => 'post', 'files'=>true, 'class'=>'form-horizontal','data-toggle'=>'validator', 'role'=>'form'))}}
					
					
					
				
					<div class="form-group required">
                                        
											{{Form::label('title', 'Title', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('title','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
											{{Form::label('description', 'Description', array('class' => 'control-label col-xs-4'))}}
											<div class="col-xs-6">
											{{Form::textarea('description','', array('class' => 'form-control','placeholder'=>'','size'=>'30x3'))}}
											 </div>
					</div>
					
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