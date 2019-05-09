<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProducedListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produced_list', function(Blueprint $table)
		{
			$table->bigInteger('plu_key_prod')->unsigned();
			$table->bigInteger('plu_key_input')->unsigned();
			$table->decimal('quantity', 6, 3);
			$table->primary(['plu_key_prod','plu_key_input']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produced_list');
	}

}