<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolmentAssessmentItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolment_assessment_item', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('enrolment_id');
            $table->unsignedBigInteger('assessment_item_id');
            $table->integer('mark');

            $table->foreign('enrolment_id')->references('id')->on('enrolments');
            $table->foreign('assessment_item_id')->references('id')->on('assessment_items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrolment_assessment_item');
    }
}
