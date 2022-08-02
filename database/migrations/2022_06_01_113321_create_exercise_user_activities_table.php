<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExerciseUserActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise_user_activities', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('exercise_id');
            $table->string('userCode');
            $table->unsignedBigInteger('userGrade');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('exercise_id')->references('id')->on('lang_exercises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercise_user_activities');
    }
}
