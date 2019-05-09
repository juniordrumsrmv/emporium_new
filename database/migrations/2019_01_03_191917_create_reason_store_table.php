<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReasonStoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reason_store', function(Blueprint $table)
		{
			$table->integer('reason_type_key')->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->primary(['reason_type_key','store_key']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reason_store');
	}

}
