<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYoutubePlaylistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('tbl_youtube_playlist', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('title')->nullable()->default(null);
            $table->longText('description')->nullable()->default(null);
            $table->integer('playlist_id')->nullable()->default(null);
            $table->longText('thumbnail_URL')->nullable()->default(null);
            $table->tinyInteger ('active')->nullable()->default('1');
            $table->timestamps();
        });

        Schema::connection('mysql')->create('tbl_youtube_videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('title')->nullable()->default(null);
            $table->longText('description')->nullable()->default(null);
            $table->integer('playlist_id')->nullable()->default(null);
            $table->longText('thumbnail_URL')->nullable()->default(null);
            $table->longText('video_id')->nullable()->default(null);
            $table->longText('video_URL')->nullable()->default(null);
            $table->tinyInteger('active')->nullable()->default('1');
            $table->dateTime('publish_date')->nullable()->default(null);
            $table->integer('views')->nullable()->default(null);
            $table->integer('likes')->nullable()->default(null);
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
        Schema::connection('mysql')->dropIfExists('tbl_youtube_playlist');
        Schema::connection('mysql')->dropIfExists('tbl_youtube_videos');
    }
}
