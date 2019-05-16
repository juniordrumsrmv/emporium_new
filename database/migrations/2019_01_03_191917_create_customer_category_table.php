<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_category', function(Blueprint $table)
		{
			$table->bigInteger('customer_key')->unsigned();
			$table->smallInteger('cst_type_key')->unsigned();
			$table->primary(['customer_key','cst_type_key']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer_category');
	}

}
