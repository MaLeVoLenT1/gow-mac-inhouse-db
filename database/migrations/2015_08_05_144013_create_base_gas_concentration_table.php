<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseGasConcentrationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('base_gas_concentration', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('instrument_id')->unsigned();
            $table->char('name');
            $table->char('concentration');
			$table->timestamps();

            $table -> foreign('instrument_id')
                ->references('id')
                -> on('instrument')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('base_gas_concentration');
	}

}
