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
                                    <table class="table table-bordered">
                                        <tbody>
										<tr>                                           
                                            <th colspan='2'>Publication   #01 
											<a href='' style='color:red;float:right;padding:5px;'><span class="glyphicon glyphicon-trash"></span></a>
											<a href='' style='color:green;float:right;padding:5px;'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
											</th>
                                        </tr>
                                        <tr>
                                           
                                            <td>Title</td>
                                            <td>Description</td>
                                            
                                        </tr>
                                        
                                    </tbody>
									</table>
									  <table class="table table-bordered">
                                        <tbody>
										<tr>                                           
                                            <th colspan='2'>Publication   #02 
											<a href='' style='color:red;float:right;padding:5px;'><span class="glyphicon glyphicon-trash"></span></a>
											<a href='' style='color:green;float:right;padding:5px;'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
											</th>
                                        </tr>
                                        <tr>
                                           
                                            <td>Title</td>
                                            <td>Description</td>
                                            
                                        </tr>
                                        
                                    </tbody></table>
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
                <form id="#" method="post" class="form-horizontal" data-toggle="validator" role="form">

					
					
					
				
					<div class="form-group required">
                                        
											{{Form::label('', 'Title', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
											{{Form::label('', 'Description', array('class' => 'control-label col-xs-4'))}}
											<div class="col-xs-6">
											{{Form::textarea('Description','', array('class' => 'form-control','placeholder'=>'','size'=>'30x3'))}}
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
                                    <h3 class="box-title">Membership</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table class="table table-bordered">
                                        <tbody>
										<tr>                                           
                                            <th colspan='2'>Membership   #01 
											<a href='' style='color:red;float:right;padding:5px;'><span class="glyphicon glyphicon-trash"></span></a>
											<a href='' style='color:green;float:right;padding:5px;'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
											</th>
                                        </tr>
                                        <tr>
                                           
                                            <td>Title</td>
                                            <td>Description</td>
                                            
                                        </tr>
                                        
                                    </tbody>
									</table>
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
                <h4 class="modal-title">Training/ Workshop/ OJT </h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                <form id="#" method="post" class="form-horizontal" data-toggle="validator" role="form">

					
					<div class="form-group required">
                                        
											{{Form::label('', 'Title', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('id','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
											{{Form::label('', 'Description', array('class' => 'control-label col-xs-4'))}}
											<div class="col-xs-6">
											{{Form::textarea('Description','', array('class' => 'form-control','placeholder'=>'','size'=>'30x3'))}}
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