<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned();
            $table->integer('input_type_id')->unsigned();
            $table->string('survey_subtext')->nullable();
            $table->boolean('answers_required')->default(false);

            $table->foreign('survey_id')->references('id')->on('survey')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('input_type_id')->references('id')->on('input_types')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('questions');
    }
}
