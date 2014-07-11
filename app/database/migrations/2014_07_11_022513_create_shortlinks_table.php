<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShortlinksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shortlinks', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('url');
            $table->string('pagetitle');
            $table->string('domainprovider');
            $table->string('favicon')->nullable()->default(NULL);
            $table->string('hash');
            $table->integer('clicks');
            $table->integer('unique_clicks');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
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
		Schema::drop('shortlinks');
	}

}
