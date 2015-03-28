<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AircraftSTC extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aircraft_STC',function($table){
			$table->increments('aircraft_STC_id');
			$table->string('STC_number');
			$table->string('STC_validation_date');
			$table->string('STC_validation_month');
			$table->string('STC_validation_year');
			$table->string('STC_control_number');
			$table->string('state_of_design');
			$table->string('SOD_notified');
			$table->string('AFM_revision_number');
			$table->string('AFM_approval_date');
			$table->string('AFM_approval_month');
			$table->string('AFM_approval_year');
			$table->string('STC_purpose');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('aircraft_STC');
	}

}
