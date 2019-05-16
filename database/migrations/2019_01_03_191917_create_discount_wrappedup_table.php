<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscountWrappedupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('discount_wrappedup', function(Blueprint $table)
		{
			$table->bigInteger('dst_key')->unsigned();
			$table->boolean('wrappedup_type');
			$table->bigInteger('wrappedup_key')->unsigned();
			$table->primary(['dst_key','wrappedup_type','wrappedup_key']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('discount_wrappedup');
	}

}
