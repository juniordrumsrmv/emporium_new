<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscountClassRestrictionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('discount_class_restriction', function(Blueprint $table)
		{
			$table->bigInteger('dst_key')->unsigned();
			$table->string('class', 25);
			$table->primary(['dst_key','class']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('discount_class_restriction');
	}

}
