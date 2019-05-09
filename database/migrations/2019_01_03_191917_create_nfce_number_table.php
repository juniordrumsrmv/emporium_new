<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNfceNumberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nfce_number', function(Blueprint $table)
		{
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->bigInteger('nf_number')->unsigned();
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
		Schema::drop('nfce_number');
	}

}
