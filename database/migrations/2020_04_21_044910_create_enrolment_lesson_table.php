<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolmentLessonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolment_lessons', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('enrolment_id');
            $table->unsignedBigInteger('lesson_id');

            $table->foreign('enrolment_id')->references('id')->on('enrolments');
            $table->foreign('lesson_id')->references('id')->on('lessons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrolment_lessons');
    }
}
