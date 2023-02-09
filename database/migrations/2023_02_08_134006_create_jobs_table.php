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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id('id_jobs');
            $table->string('name_jobs');
            $table->unsignedBigInteger('category');
            $table->string('payment');
            $table->unsignedBigInteger('company');
            $table->unsignedBigInteger('city');
            $table->string('experience');
            $table->text('description');
            $table->text('responsibility');
            $table->text('requirement');
            $table->text('conditions');
            $table->text('skills');
            $table->timestamps();
            $table->foreign('category')->references('id_category')->on('categories');
            $table->foreign('company')->references('id_company')->on('companies');
            $table->foreign('city')->references('id_city')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
