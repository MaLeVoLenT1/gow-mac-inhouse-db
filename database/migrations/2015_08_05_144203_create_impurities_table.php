<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpuritiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('impurities', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('percentage');
            $table->string('name');
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
		Schema::drop('impurities');
	}

}
