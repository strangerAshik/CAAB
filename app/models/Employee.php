<?php

class Employee extends \Eloquent {
	protected $fillable = [];
	protected $table = 'qualification_personal';
	
	
	static public function notApproved($acca)  {
		
		if($acca->verify!='1'){
			
			return "<div id='myAlert' class='alert alert-warning'>
							   <a href='#' class='close' data-dismiss='alert'>&times;</a>
							   <strong>Warning!</strong> Data is not Approved yet!!
			</div>";
		}
										
							
	}
}