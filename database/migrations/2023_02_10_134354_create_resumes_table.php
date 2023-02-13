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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table ->string('avatar')->nullable();
            $table->unsignedBigInteger('gender_id');
            $table->unsignedBigInteger('education_id');
            $table->unsignedBigInteger('city_id');
            $table->string('job');
            $table->integer('payment');
            $table->string('phone');
            $table->string('email');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('timetable_id');
            $table->string('file_name');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('education_id')->references('id')->on('education');
            $table->foreign('timetable_id')->references('id')->on('timetables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumes');
    }
};
