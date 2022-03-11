<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->string('department')->nullable();
            $table->string('semester')->nullable();
            $table->string('curriculum_year')->nullable();
            $table->string('student_type')->nullable();
            $table->string('student_status')->nullable();
            $table->string('section')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('studentId')->nullable();
            $table->string('birth_date')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->softDeletes();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
