<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accounts', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
			$table->increments('id');
            $table->string('token');
            $table->string('secret');
            $table->string('provider');
            $table->string('providerid');
            $table->string('profileimage');
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
		Schema::drop('accounts');
	}

}
