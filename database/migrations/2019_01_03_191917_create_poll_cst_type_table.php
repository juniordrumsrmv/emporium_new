<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePollCstTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('poll_cst_type', function(Blueprint $table)
		{
			$table->smallInteger('cst_type_key')->unsigned();
			$table->bigInteger('poll_key')->unsigned();
			$table->primary(['cst_type_key','poll_key']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('poll_cst_type');
	}

}