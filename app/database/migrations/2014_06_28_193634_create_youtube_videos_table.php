<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYoutubeVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('youtube_videos', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('url');
            $table->string('title');
            $table->text('description');

            $table->integer('videoable_id')->unsigned();
            $table->string('videoable_type');

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
		Schema::drop('youtube_videos');
	}

}
