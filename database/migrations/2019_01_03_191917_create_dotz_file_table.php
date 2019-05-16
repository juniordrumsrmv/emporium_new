<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDotzFileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dotz_file', function(Blueprint $table)
		{
			$table->bigInteger('file_key', true)->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->bigInteger('plu_key_list_id')->unsigned();
			$table->string('plu_list_description', 60)->nullable();
			$table->dateTime('last_change_time')->nullable();
			$table->smallInteger('file_type')->unsigned()->nullable();
			$table->primary(['file_key','store_key','plu_key_list_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dotz_file');
	}

}
