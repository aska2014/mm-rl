<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClothesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clothes', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('title');
            $table->string('type');
            $table->text('description');
            $table->string('client');
            $table->string('tags');

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
		Schema::drop('clothes');
	}

}
