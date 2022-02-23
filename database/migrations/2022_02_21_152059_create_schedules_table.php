<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->string('proffessor')->nullable();
            $table->string('department')->nullable();
            $table->string('semester')->nullable();
            $table->string('curriculum_year')->nullable();
            $table->string('student_type')->nullable();
            $table->string('student_status')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('subjects')->nullable();
            $table->string('age')->nullable();
            $table->string('units')->nullable();
            $table->string('days')->nullable();
            $table->string('time')->nullable();
            $table->string('section')->nullable();
            $table->string('room')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('schedules');
    }
};
