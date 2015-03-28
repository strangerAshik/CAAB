@extends('layout')
@section('content')
<style>

</style>
<section class='content' >

    <div class="row" style='margin:0px 0px 0px 0px;;'>
                      
						
						<div class="row">
						
                        <div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
                            <!-- small box -->
						<div class="small-box bg-aqua height" >
							<div class="inner">
								<h4 style='font-weight:bold;'>Action Entry</h4>
							</div>
							<div class="icon">
								<i class=" icon ion-social-buffer"></i>
							</div>
							<a class="small-box-footer" href="#">
								More info <i class="fa fa-arrow-circle-right"></i>
							</a>
						</div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-green height" >
                                <div class="inner">
                                    <h4 style='font-weight:bold;'> Safety Concern</h4>
                                    
                                </div>
                                <div class="icon">
                                    <i class="icon ion-alert-circled"></i>
                                </div>
                                <a class="small-box-footer" href="{{'safety/main'}}">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-yellow height" >
                                <div class="inner">
                                   <h4 style='font-weight:bold;'>Air Craft</h4>
                                   
                                </div>
                                <div class="icon">
                                    <i class="icon ion-plane"></i>
                                </div>
                                <a class="small-box-footer" href="{{'aircraft/main'}}">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-red height">
                                <div class="inner">
                                   <h4 style='font-weight:bold;'>Organization</h4>
                                 
                                </div>
                                <div class="icon">
                                    <i class="icon ion-briefcase"></i>
                                </div>
                                <a class="small-box-footer" href="#">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div>
					<div class="row">
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-blue height">
                                <div class="inner">
                                    <h4 class='title'>
                                        PEL
                                    </h4>
                                   
                                </div>
                                <div class="icon">
                                    <i class="icon ion-key"></i>
                                </div>
                                <a class="small-box-footer" href="#">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-purple height">
                                <div class="inner">
                                    <h4 class="title">
                                         Admin Tracking
                                    </h4>
                                  
                                </div>
                                <div class="icon">
                                    <i class="icon ion-eye"></i>
                                </div>
                                <a class="small-box-footer" href="{{'admin/main'}}">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-teal height">
                                <div class="inner">
                                    <h4 class='title'>
                                         Document Control 
                                    </h4>
                                    
                                </div>
                                <div class="icon">
                                    <i class="icon ion-pricetags"></i>
                                </div>
                                <a class="small-box-footer" href="{{'doc/main'}}">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-maroon height">
                                <div class="inner">
                                    <h4 class='title'>
                                        Employee
                                    </h4>
                                   
                                </div>
                                <div class="icon">
                                   <a href="{{URL::to('qualification/main');}}"> <i class="icon ion-person-stalker"></i></a>
                                </div>
                                <a class="small-box-footer" href="{{URL::to('qualification/main');}}">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div>
					<div class="row">
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-aqua height">
                                <div class="inner">
                                    <h4 class='title'> 
                                        ANS/AGS
                                    </h4>
                                    <p>
                                        
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a class="small-box-footer" href="#">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-green height">
                                <div class="inner">
                                    <h4 class='title'>
                                        Report
                                    </h4>
                                </div>
                                <div class="icon">
                                    <i class="icon ion-clipboard"></i>
                                </div>
                                <a class="small-box-footer" href="#">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-yellow height">
                                <div class="inner">
                                    <h4 class='title'>
                                        Wild Life Stack
                                    </h4>
                                    
                                </div>
                                <div class="icon">
                                    <i class="icon ion-alert"></i>
                                </div>
                                <a class="small-box-footer" href="#">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-red height">
                                <div class="inner">
                                    <h4 class='title'> 
											Accident And Incident Investigation 
                                    </h4>
                                   
                                </div>
                                <div class="icon">
                                    <i class="icon ion-ios7-compose"></i>
                                </div>
                                <a class="small-box-footer" href="#">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div>
					<div class="row">
                        <div class="col-lg-3 col-xs-6 col-md-3 ">
                            <!-- small box -->
                            <div class="small-box bg-blue height">
                                <div class="inner">
                                    <h4 class='title'>
                                         E-Library
                                    </h4>
                                    
                                </div>
                                <div class="icon">
                                    <i class="icon ion-document-text"></i>
                                </div>
                                <a class="small-box-footer" href="#">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-purple height">
                                <div class="inner">
                                    <h4 class='title'>
                                        Volunteer Reporting 
                                    </h4>
                                    <p>
                                        
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="icon ion-flag"></i>
                                </div>
                                <a class="small-box-footer" href="#">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-teal height">
                                <div class="inner">
                                    <h4 class='title'>
                                        Notifications
                                    </h4>
                                    <p>
                                        
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-ios7-alarm-outline"></i>
                                </div>
                                <a class="small-box-footer" href="#">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-maroon height">
                                <div class="inner">
                                    <h4 class='title'>
                                        Settings
                                    </h4>                                    
                                </div>
                                <div class="icon">
                                    <i class="icon ion-ios7-gear"></i>
                                </div>
                                <a class="small-box-footer" href="#">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div>
	</div>
</section>
@stop