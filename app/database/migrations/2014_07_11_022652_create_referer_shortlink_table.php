<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRefererShortlinkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('referer_shortlink', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('referer_id')->unsigned()->index();
			$table->foreign('referer_id')->references('id')->on('referer')->onDelete('cascade');
			$table->integer('shortlink_id')->unsigned()->index();
			$table->foreign('shortlink_id')->references('id')->on('shortlinks')->onDelete('cascade');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('referer_shortlink');
	}

}
