<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoteTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vote_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->foreign('vote_id')->references('id')
                ->on('votes')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')
                ->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vote_tag');
    }
}
