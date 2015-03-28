<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AircraftTCI extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Aircraft_TCI',function($table){
			$table->increments('aircraft_TCI_id');
			$table->string('validation_date');
			$table->string('validation_month');
			$table->string('validation_year');
			$table->string('control_number');
			$table->string('AFM_approval_date');
			$table->string('AFM_approval_month');
			$table->string('AFM_approval_year');
			$table->string('AFM_revision');
			$table->string('state_of_design');
			$table->string('SOD_notified_date');
			$table->string('SOD_notified_month');
			$table->string('SOD_notified_year');
			$table->string('power_plant_model');
			$table->string('power_plant_TDS_number');
			$table->string('propeller_model');
			$table->string('propeller_TDS_number');
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
		Schema::drop('Aircraft_TCI');
	}

}
