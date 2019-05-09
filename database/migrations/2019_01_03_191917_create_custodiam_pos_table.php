<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustodiamPosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('custodiam_pos', function(Blueprint $table)
		{
			$table->bigInteger('store_key');
			$table->smallInteger('pos_number');
			$table->string('pos_name', 30)->nullable();
			$table->primary(['store_key','pos_number']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('custodiam_pos');
	}

}
