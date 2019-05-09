<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNfceCountFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nfce_count_files', function(Blueprint $table)
		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->dateTime('start_time');
			$table->bigInteger('quantity')->unsigned()->nullable();
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
		Schema::drop('nfce_count_files');
	}

}