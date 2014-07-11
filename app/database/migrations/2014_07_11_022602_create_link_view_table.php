<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinkViewTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('link_view', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
			$table->increments('id');
            $table->string('session_id');
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
		Schema::drop('link_view');
	}

}
