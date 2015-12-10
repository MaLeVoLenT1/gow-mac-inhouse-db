<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherDevicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('other_devices', function(Blueprint $table)
		{
			$table->increments('id');
            $table->char('name');
			//Put description here too
			//notes
            $table->integer('instrument_id')->unsigned();
			$table->timestamps();
            $table->foreign('instrument_id')->references('id')->on('instrument')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('other_devices');
	}

}
