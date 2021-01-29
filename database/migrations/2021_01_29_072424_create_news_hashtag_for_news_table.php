<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsHashtagForNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_hashtag_for_news', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('hashtag_id')->constrained('news_hashtags');
            $table->foreignId('news_id')->constrained('news');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_hashtag_for_news');
    }
}
