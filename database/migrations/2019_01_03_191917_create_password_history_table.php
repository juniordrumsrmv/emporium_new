<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePasswordHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('password_history', function(Blueprint $table)
		{
			$table->bigInteger('agent_key')->unsigned();
			$table->string('cript_password', 50)->nullable();
			$table->dateTime('last_change_time');
			$table->primary(['agent_key','last_change_time']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('password_history');
	}

}
