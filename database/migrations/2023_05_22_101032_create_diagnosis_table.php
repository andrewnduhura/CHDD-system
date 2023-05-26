<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('doctor_id');
            $table->enum('result', ['positive', 'negative']);
            $table->enum('alcohol_drinking', ['yes', 'no']);
            $table->enum('smoking', ['yes', 'no']);
            $table->enum('stroke', ['yes', 'no']);
            $table->enum('diff_walking', ['yes', 'no']);
            $table->enum('sex', ['male', 'female']);
            $table->enum('age_category', ['option1', 'option2', 'option3', 'option4']);
            $table->enum('diabetic', ['yes', 'no']);
            $table->enum('gen_health', ['Excellent','Very good','good', 'fair','poor']);
            $table->enum('asthma', ['yes', 'no']);
            $table->enum('kidney_disease', ['yes', 'no']);
            $table->enum('skin_cancer', ['yes', 'no']);
            $table->integer('bmi');
            $table->integer('physical_health');
            $table->integer('mental_health');
            $table->integer('physical_activity');
            $table->integer('sleep_time');
            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('doctor_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnosis');
    }
}
