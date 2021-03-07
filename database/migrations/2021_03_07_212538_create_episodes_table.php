<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chapters_id');
            $table->unsignedBigInteger('users_id');
            $table->string('title');
            $table->string('short_description');
            $table->string('long_description');
            $table->boolean('explicit');
            $table->string('url');
            $table->timestamps();

            $table->foreign('chapters_id')->references('id')->on('chapters');
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodes');
    }
}