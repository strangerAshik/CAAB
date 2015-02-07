<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResumePersonal extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('resume_personal',function($table){
			//personal info
			$table->increments('id');
			$table->integer('emp_id');
			$table->string('title');
			$table->string('first_name');
			$table->string('middle_name');
			$table->string('last_name');
			$table->string('mother_name');
			$table->string('father_name');
			$table->string('mailing_address');
			$table->string('parmanent_address');
			$table->string('telephone_work');
			$table->string('telephone_residence');
			$table->string('mobile_no');
			$table->string('nationality');
			$table->string('national_id');
			$table->string('sex');
			$table->string('blood_group');
			$table->string('date_of_birth');
			$table->string('photo');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resume_personal');
	}

}
