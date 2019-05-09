<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionDepartmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promotion_department', function(Blueprint $table)
		{
			$table->bigInteger('promotion_key')->unsigned();
			$table->bigInteger('department_key')->unsigned();
			$table->primary(['promotion_key','department_key']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('promotion_department');
	}

}
