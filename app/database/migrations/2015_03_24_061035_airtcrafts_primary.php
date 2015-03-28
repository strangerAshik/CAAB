<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AirtcraftsPrimary extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aircrafts_primary',function($table){
			$table->increments('id');
			$table->string('serial_number');
			$table->string('registration_no');
			$table->string('aircraft_MM');
			$table->string('aircraft_MSN');
			$table->string('aircraft_operator');
			$table->string('active');
			$table->string('registration');
			$table->string('cofa');
			$table->string('stcs');
			$table->string('current_exemptions');
			$table->string('insurance');
			$table->string('currently_leased');
			$table->string('memo');
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
		Schema::drop('aircrafts_primary');
	}

}
