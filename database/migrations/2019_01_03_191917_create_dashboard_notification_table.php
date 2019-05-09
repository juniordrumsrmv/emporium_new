<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDashboardNotificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dashboard_notification', function(Blueprint $table)
		{
			$table->bigInteger('notification_key', true)->unsigned();
			$table->bigInteger('store_key')->unsigned();
			$table->smallInteger('pos_number')->unsigned();
			$table->dateTime('notification_time');
			$table->smallInteger('notification_type')->nullable();
			$table->smallInteger('transaction_type')->nullable();
			$table->smallInteger('status')->nullable();
			$table->bigInteger('units')->unsigned()->nullable();
			$table->string('process_id')->nullable();
			$table->integer('ticket_number')->unsigned();
			$table->integer('trn_number')->unsigned()->nullable();
			$table->bigInteger('cashier_key')->unsigned()->nullable();
			$table->bigInteger('authorizer_key')->unsigned()->nullable();
			$table->binary('notification_data', 65535)->nullable();
			$table->primary(['notification_key','store_key','pos_number','ticket_number','notification_time']);
			$table->index(['store_key','pos_number','notification_time','process_id','status','transaction_type'], 'index_notification');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dashboard_notification');
	}

}
