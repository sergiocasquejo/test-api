<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name', 255);
            $table->char('birth_year', 10);
            $table->char('eye_color', 30);
            $table->char('gender', 10);
            $table->char('hair_color', 30);
            $table->char('height', 10);
            $table->char('mass', 10);
            $table->char('skin_color', 60);
            $table->char('homeworld', 255);
            $table->mediumText('films');
            $table->mediumText('species');
            $table->mediumText('starships');
            $table->mediumText('vehicles');
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
        Schema::dropIfExists('people');
    }
}
