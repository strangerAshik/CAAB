@extends('layout')
@section('content')
<!------------------------Personnel-------------------------------->
<section class="content" style="max-width:760px;margin:0 auto;">
 <div class="row" style="">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
							 <div class="box-header">
									<h3 class="box-title">Personnel Info.</h3>
							  </div>
                <!-- /.box-header -->
				
					<div class="box-body">
					@foreach($personnel as $person)
                    <table class="table table-bordered">
                        <tbody>
                           
                            <tr>
                                <td>
									
									Title
								</td>
                                <td>{{$person->title}}</td>
                            </tr>
                            <tr>
                                <td>First Name</td>
                                <td>{{$person->first_name}}</td>
                            </tr>
                            <tr>
                                <td>Middle Name</td>
                                <td> {{$person->middle_name}}</td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td>{{$person->last_name}}</td>
                            </tr>
                            <tr>
                                <td>Mother's Name</td>
                                <td>{{$person->mother_name}}</td>
                            </tr>
							<tr>
                                <td>Father's Name</td>
                                <td>{{$person->father_name}}</td>
                            </tr>
							<tr>
                                <td>Mailing Address</td>
                                <td>{{$person->mailing_address}}</td>
                            </tr>
							<tr>
                                <td>Permanent Address</td>
                                <td>{{$person->parmanent_address}}</td>
                            </tr>
							<tr>
                                <td>Telephone (work)</td>
                                <td>{{$person->telephone_work}}</td>
                            </tr>
							<tr>
                                <td>Telephone (residence)</td>
                                <td>{{$person->telephone_residence}}</td>
                            </tr>
							<tr>
                                <td>Mobile no</td>
                                <td>{{$person->mobile_no}}</td>
                            </tr>
							<tr>
                                <td>Nationality</td>
                                <td>{{$person->nationality}}</td>
                            </tr>
							<tr>
                                <td>National ID</td>
                                <td>{{$person->national_id}}</td>
                            </tr>
							<tr>
                                <td>Sex</td>
                                <td>{{$person->sex}}</td>
                            </tr>
							<tr>
                                <td>Blood Group</td>
                                <td>{{$person->blood_group}}</td>
                            </tr>
							<tr>
                                <td>Date Of Birth</td>
                                <td>{{$person->date_of_birth .' '.$person->month_of_birth .' '.$person->year_of_birth  }}</td>
                            </tr>
							<tr>
                                <td>Photo</td>
                                <td>{{ HTML::image('img/PersonnelPhoto/'.$person->photo, 'Employee Photo', array('class' => '')) }}</td>
                            </tr>
                        </tbody>
                    </table>
					@endforeach
                </div>
                <!-- /.box-body -->
                               
                            </div><!-- /.box -->
						</div>
						
				</div
<!------------------------------End Personnel----------------------------------------->
<!------------------------------Start academic Education----------------------------------------->
<div class="row">
                        <div class="col-md-12">
							<div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Academic Qualification</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
								
									
								@foreach($accademic as $acca)								
									
                                    <table class="table table-bordered">
                                        <tbody>
										<tr>                                           
                                            <th colspan='2' >Academic Qualification   #{{++$sl1}}
											
											
                                    </a>
											</th>
                                        </tr>
                                        <tr>
                                           
                                            <td class="col-md-4">Level of Education </td>
                                            <td >{{$acca->level}}</td>
                                            
                                        </tr>
                                        
										<tr>
                                           
                                            <td>Name of Degree</td>
                                            <td>{{$acca->name_of_degree}}</td>
                                            
                                        </tr>
										<tr>
                                           
                                            <td>Educational Institute</td>
                                            <td>{{$acca->institute}}</td>
                                            
                                        </tr> 
										<tr>
                                            <td>Passing Year</td>
                                            <td>{{$acca->pussing_year}}</td>
                                            
                                        </tr>
										<tr>
                                            <td>Class/CGPA/ Grade/ Percentage</td>
                                            <td>{{$acca->standard .' :  '.$acca->grade_division }}</td>
                                            
                                        </tr>
										<tr>
                                            <td>Discipline</td>
                                            <td>{{$acca->discipline}}</td>
                                            
                                        </tr>
										<tr>
                                            <td>Specialization</td>
                                            <td>{{$acca->specialization}}</td>                                        
                                        </tr>
                                    </tbody></table>
									@endforeach
                                </div><!-- /.box-body -->
                            </div>    
                            </div>    
                            </div>   
<!------------------------------End academic Education----------------------------------------->
<!------------------------------Start Thesis Education----------------------------------------->
<div class="row">
                        <div class="col-md-12">
							<div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Thesis/Project/Internship/Dissertation  </h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
								@foreach($thesis as $thes)
                                    <table class="table table-bordered">
                                        <tbody>
										<tr>                                           
                                            <th colspan='2'>Thesis/Project/Internship/Dissertation    #{{++$sl2}}
											
                                    </a>
                                        </tr>
                                        <tr>
                                           
                                            <td class='col-md-4'>Degree level</td>
                                            <td >{{$thes->level}}</td>
                                            
                                        </tr>
                                        
										<tr>
                                           
                                            <td>Type</td>
                                            <td>{{$thes->type}}</td>
                                            
                                        </tr>
										<tr>
                                           
                                            <td>Title</td>
                                            <td>{{$thes->title}}</td>
                                            
                                        </tr> 
										<tr>
                                            <td>Institute</td>
                                            <td>{{$thes->institute}}</td>
                                            
                                        </tr>
										<tr>
                                            <td>Duration</td>
                                            <td>{{$thes->duration}}</td>
                                            
                                        </tr>
										                            
                                       
                                    </tbody></table>
									@endforeach
                                </div><!-- /.box-body -->
                            </div>    
                            </div>    
                            </div> 
<!------------------------------End Thesis Education----------------------------------------->
<!------------------------------Start Pro_degree----------------------------------------->
<div class="row">
                        <div class="col-md-12">
							<div class="box box-primary">
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
                                            <th >Year</th>
                                           
                                            
                                        </tr>
										@foreach($pro_degree as $pro)
                                        <tr>
                                           
                                            <td>{{$pro->pro_degree_name}}</td>
                                            <td>{{$pro->pro_degree_institute}}</td>
                                            <td>{{$pro->pro_degree_duration}}</td>
                                            <td>{{$pro->pro_degree_grade}}</td>
                                            <td>{{$pro->pro_degree_major_area}}</td>
                                            <td>{{$pro->pro_degree_year}}</td>
                                            
                                            
                                       @endforeach
										
										
										
                                            
                                       
                                    </tbody></table>
								
                                </div><!-- /.box-body -->
                            </div>    
                            </div>    
                            </div>
<!------------------------------End Pro_degree----------------------------------------->
<!------------------------------Start Training/workshop/ojt----------------------------------------->
<div class="row">
                        <div class="col-md-12">
							<div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Training/ Workshop/ OJT  </h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
								@foreach($training_ojt as $to)
                                 <table class="table table-bordered">
                                        <tbody>
										<tr>                                           
                                            <th colspan='2'>Training/ Workshop/ OJT  
											</th>
                                        </tr>
                                        <tr>
                                           
                                            <td class="col-md-4">Category</td>
                                            <td >{{$to->category}}</td>
                                            
                                        </tr>
                                        @if($to->category=='Training')
											<tr>
												<td>Type of Training</td><td>{{$to->type_of_training}}</td>
											</tr>
											<tr>
												<td>Type of Training</td><td>{{$to->training_course}}</td>
											</tr>
											<tr>
												<td>Subject</td><td>{{$to->subject}}</td>
											</tr>
										@endif
										@if($to->category=='OJT')
											<tr>
												<td>Training Task</td><td>{{$to->training_task}}</td>
											</tr>
											
											
										@endif
										@if($to->category=='Workshop')
											<tr>
												<td>Topic</td><td>{{$to->topic}}</td>
											</tr>
											
											
										@endif
										<tr>
                                           
                                            <td>
												Major Area
											</td>
                                            <td>
                                               {{$to->major_area}}
                                            </td>
                                            
                                        </tr>
										<tr>
                                           
                                            <td>
											Instructor(s):
											</td>
                                            <td>
                                               {{$to->instructor}}
                                            </td>
                                            
                                        </tr> 
										<tr>
                                            <td>
												
												Institute:
											</td>
                                            <td>
                                               {{$to->institute}}
                                            </td>
                                            
                                        </tr>
										<tr>
                                            <td>												
												Address:
											</td>
                                            <td>
                                               {{$to->location}}
												
                                            </td>
                                            
                                        </tr>
										<tr>
                                            <td>
												Certificate Issued:
											</td>
                                            <td>
                                               {{$to->proof}}
                                            </td>
                                            
                                        </tr>
										<tr>
                                            <td>
												Management Certification:
											</td>
                                            <td>
                                                {{$to->certification}}
                                            </td>
                                            
                                        </tr>
										<tr>
                                            <td>
												Duration:
											</td>
                                            <td>
                                                {{$to->duration}}
                                            </td>
                                            
                                        </tr>
										
                                            
                                       
                                    </tbody></table>
								@endforeach
                                </div><!-- /.box-body -->
                            </div>    
                            </div>    
                            </div>  
<!------------------------------End Training/workshop/ojt----------------------------------------->
<!------------------------------Start Language----------------------------------------->
<div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Language</h3>
                </div>
                <!-- /.box-header -->
                <!--<div class="box-body">
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
					</div>-->
					<div class="box-body">
					@foreach($language as $lang)
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th colspan='2'> Language  #{{++$sl4}}
                                    
                                </th>
                            </tr>
                            <tr>
                                <td class='col-md-4'>Language</td>
                                <td>{{$lang->language}}</td>
                            </tr>
                            <tr>
                                <td>Speak</td>
                                <td>{{$lang->lang_speak}}</td>
                            </tr>
                            <tr>
                                <td>Understand</td>
                                <td> {{$lang->lang_understanding}}</td>
                            </tr>
                            <tr>
                                <td>Read</td>
                                <td>{{$lang->lang_reading}}</td>
                            </tr>
                            <tr>
                                <td>Write</td>
                                <td>{{$lang->lang_writing}}</td>
                            </tr>
                        </tbody>
                    </table>
					@endforeach
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
<!------------------------------End Language----------------------------------------->
<!------------------------------Start Technical licence----------------------------------------->
<div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Technical Licence Record</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					
					</div>
					<div class="box-body">
					@foreach($technical_licence as $tl)
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th colspan='2'>LICENSE  #{{++$sl5}}
                                  
                                </th>
                            </tr>
                            <tr>
                                <td class='col-md-4'>Active</td>
                                <td >{{$tl->active}}</td>
                            </tr>
                            <tr>
                                <td>Licence Number</td>
                                <td>{{$tl->licence_no}}</td>
                            </tr>
                            <tr>
                                <td> Licence Type</td>
                                <td> {{$tl->licence_type}}</td>
                            </tr>
							<tr>
                                <td>Issue Date</td>
                                <td> {{$tl->issue_date.' '.$tl->issue_month.' '.$tl->issue_year}}</td>
                            </tr>
                            <tr>
                                <td>Expiration Date</td>
                                <td>{{$tl->expiration_date.' '.$tl->expiration_month.' '.$tl->expiration_year}}</td>
                            </tr>
                            <tr>
                                <td>Rating </td>
                                <td>{{$tl->rating}}</td>
                            </tr>
							
                        </tbody>
                    </table>
					@endforeach
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
<!------------------------------End Technical licence----------------------------------------->
<!------------------------------Start aircraft Qualification----------------------------------------->
<div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">CAA Employee Aircraft Qualification</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					
					</div>
					<div class="box-body">
					@foreach($aircraft as $aircr)
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th colspan='2'>Aircraft Qualification  #{{++$sl6}}
                                   
                                </th>
                            </tr>
                            <tr>
                                <td class="col-md-4">Active</td>
                                <td >{{$aircr->active}}</td>
                            </tr>
                            <tr>
                                <td>Qualification Type</td>
                                <td>{{$aircr->qualification_type}}</td>
                            </tr>
                            <tr>
                                <td>Total Hours</td>
                                <td>{{$aircr->total_hours}}</td>
                            </tr>
							<tr>
                                <td>Aircraft MM</td>
                                <td> {{$aircr->aircraft_mm}}</td>
                            </tr>
                            <tr>
                                <td>Aircraft MSN</td>
                                <td>{{$aircr->aircraft_msm}}</td>
                            </tr>
                            <tr>
                                <td>Completion Date </td>
                                <td>{{$aircr->completion_date." ".$aircr->completion_month." ".$aircr->completion_year}}</td>
                            </tr>
							<tr>
                                <td>Status</td>
                                <td>{{$aircr->status}}</td>
                            </tr>
							<tr>
                                <td>Training Institute</td>
                                <td>{{$aircr->institute}}</td>
                            </tr>
							<tr>
                                <td>Instructor name</td>
                                <td>{{$aircr->instructor}}</td>
                            </tr>
							<tr>
                                <td>Certificate Issued</td>
                                <td>{{$aircr->proof}}</td>
                            </tr>
							<tr>
                                <td>Management Certification</td>
                                <td>{{$aircr->certification}}</td>
                            </tr>
							
                        </tbody>
                    </table>
					@endforeach
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
<!------------------------------End aircraft Qualification----------------------------------------->
<!------------------------------Start Reference Qualification----------------------------------------->
<div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Reference</h3>
                </div>
                <!-- /.box-header -->
               
					<div class="box-body">
					@foreach($reference as $ref)
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th colspan='2' >Reference  #{{++$sl7}}
                                  
                                </th>
                            </tr>
                            <tr>
                                <td class="col-md-4">Referee Type</td>
                                <td >{{$ref->referee_type}}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{$ref->name}}</td>
                            </tr>
                            <tr>
                                <td>Designation</td>
                                <td> {{$ref->designation}}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{$ref->address}}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{$ref->telephone}}</td>
                            </tr>
							<tr>
                                <td>Email</td>
                                <td>{{$ref->email_address}}</td>
                            </tr>							
							<tr>
                                <td>Year Acquainted</td>
                                <td>{{$ref->years_acquainted}}</td>
                            </tr>
							<tr>
                                <td>May we request a reference</td>
                                <td>{{$ref->may_we_request}}</td>
                            </tr>
                        </tbody>
                    </table>
				@endforeach
				
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
<!------------------------------End Reference Qualification----------------------------------------->
<!------------------------------Start Emp Verification ----------------------------------------->
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
					@foreach($verification as $veri)
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th colspan='2'>Employee verification
                                   
                                </th>
                            </tr>
                            <tr>
                                <td class="col-md-4">Name</td>
                                <td >{{$veri->name}}</td>
                            </tr>
                            <tr>
                                <td>Employee ID</td>
                                <td>{{Auth::user()->emp_id()}}</td>
                            </tr>
                            <tr>
                                <td>Date Of Entry</td>
                                <td>{{$veri->entry_date." ".$veri->entry_month." ".$veri->entry_year}}</td>
                            </tr>
							<tr>
                                <td>Active</td>
                                <td> {{$veri->active}}</td>
                            </tr>
                            <tr>
                                <td>Termination/ Separation Date</td>
                                  <td>{{$veri->termination_date." ".$veri->termination_month." ".$veri->termination_year}}</td>
                            </tr>
                            <tr>
                                <td>Position </td>
                                <td>{{$veri->position}}</td>
                            </tr>
							<tr>
                                <td>Note </td>
                                <td>{{$veri->note}}
								</td>
                            </tr>
							
                        </tbody>
                    </table>
					@endforeach
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
<!------------------------------End Emp Verification ----------------------------------------->
<!------------------------------Start Other publications----------------------------------------->
<div class="row">
                        <div class="col-md-12">
							<div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Publication</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
								@foreach($publication as $pub)
                                    <table class="table table-bordered">
                                        <tbody>
										<tr>                                           
                                            <th colspan='2'>Publication   #{{++$sl8}}
											
											</th>
                                        </tr>
                                        <tr>
                                           
                                            <td class="col-md-4">{{$pub->title}}</td>
                                            <td >{{$pub->description}}</td>
                                            
                                        </tr>
                                        
                                    </tbody>
									</table>
								@endforeach
									  
                                </div><!-- /.box-body -->
                            </div>    
                            </div>    
                            </div>   
<!------------------------------End Other publications----------------------------------------->
<!------------------------------Start Other Membership----------------------------------------->
 <div class="row">
                        <div class="col-md-12">
							<div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Membership</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
								@foreach($membership as $memb)
                                    <table class="table table-bordered">
                                        <tbody>
										<tr>                                           
                                            <th colspan='2'>Membership   #{{++$sl9}}
											
											</th>
                                        </tr>
                                        <tr>
                                           
                                            <td class="col-md-4">{{$memb->title}}</td>
                                            <td >{{$memb->description}}</td>
                                            
                                        </tr>
                                        
                                    </tbody>
									</table>
								@endforeach
                                </div><!-- /.box-body -->
                            </div>    
                            </div>    
                            </div>
<!------------------------------End Other Membership----------------------------------------->

<a class="btn btn-primary"id='printOption'href="javascript:void();" onclick="document.getElementById('printOption').style.visibility = 'hidden'; myFunction(); return true;">Print/Save</a>
</section>

<script>
function myFunction() {
    window.print();
}
</script>
@stop