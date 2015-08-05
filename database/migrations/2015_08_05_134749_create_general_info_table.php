<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('general_info', function(Blueprint $table)
		{
			$table->increments('id');
            $table->char('customer_name', 50);
            $table->char('address', 50);
            $table->char('order_number',40);
            $table->char('quote_number', 40);
            $table->date('date_ordered');
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
		Schema::drop('general_info');
	}

}
