<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMefTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mef', function(Blueprint $table)
		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->integer('ticket_number')->unsigned();
			$table->dateTime('start_time');
			$table->smallInteger('ecf_number')->unsigned();
			$table->bigInteger('trn_number')->unsigned();
			$table->date('fiscal_date')->nullable();
			$table->binary('mef_text')->nullable();
			$table->primary(['store_key','pos_number','trn_number','start_time']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mef');
	}

}
