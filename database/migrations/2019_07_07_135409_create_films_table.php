<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('title', 255);
            $table->integer('episode_id');
            $table->mediumText('opening_crawl');
            $table->char('director', 120);
            $table->char('producer', 120);
            $table->char('release_date', 60);
            $table->mediumText('species');
            $table->mediumText('starships');
            $table->mediumText('vehicles');
            $table->mediumText('characters');
            $table->mediumText('planets');
            $table->char('url', 255);
            $table->char('created', 120);
            $table->char('edited', 120);
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
        Schema::dropIfExists('films');
    }
}
