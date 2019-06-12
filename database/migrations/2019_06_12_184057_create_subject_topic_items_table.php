<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTopicItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_topic_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('topic_id')->unsigned();
            $table->string('title');
            $table->longText('description');
            $table->integer('type');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('duration');
            $table->timestamps();
            $table->foreign('topic_id')->references('id')->on('subject_topics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_topic_items');
    }
}
