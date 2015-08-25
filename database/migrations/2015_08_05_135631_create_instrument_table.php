<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstrumentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('instrument', function(Blueprint $table)
		{
			$table->increments('id');
            $table->char('instrument_type');
            $table->char('instrument_serial');
            $table->char('PN');
            $table->char('series_number');
            $table->char('power');
            $table->char('volts');
            $table->char('frequency');
            $table->char('approvals');
            $table->char('flow_system_number');
            $table->char('special_features');
            $table->char('design_status');
            $table->char('notes');

            $table->integer('customer_id') -> unsigned();
			$table->timestamps();

            $table -> foreign('customer_id')
                    ->references('id')
                    -> on('general_info');


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('instrument');
	}

}
