<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDashboardParameterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dashboard_parameter', function(Blueprint $table)
		{
			$table->bigInteger('prm_key', true)->unsigned();
			$table->bigInteger('prm_type')->unsigned();
			$table->string('prm_id', 24);
			$table->text('prm_value', 65535)->nullable();
			$table->bigInteger('agent_id')->unsigned()->nullable();
			$table->primary(['prm_key','prm_type','prm_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dashboard_parameter');
	}

}
