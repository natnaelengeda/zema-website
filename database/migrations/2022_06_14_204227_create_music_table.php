<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music', function (Blueprint $table) {
             
            $table->id();
            $table->string('music_name');
            // $table->string('music_pic')->nullable();
            $table->string('music_file');
            $table->string('music_format');
            $table->string('music_genre');
            $table->string('music_duration');
            $table->string('music_size');
            // $table->string('music_title');
            // $table->string('music_type');
            $table->string('music_track_num');
            $table->unsignedBigInteger('music_like')->nullable();
            $table->string('music_image')->nullable();
            $table->unsignedBigInteger('artist_id');
            $table->timestamps();
            $table->string('hashtag');
            $table->unsignedBigInteger('listen_count')->nullable();
            $table->string('album')->nullable();
            $table->string('cont_artists')->nullable();

            $table->foreign('artist_id')->references('id')->on('artists');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('music');
    }
}
