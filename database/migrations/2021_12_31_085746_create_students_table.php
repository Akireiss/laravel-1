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
        Schema::create('students', function (Blueprint $table) {
            //
            $table->id();
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('classroom_id');
            $table->integer('LRN');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('age');
            $table->string('email')->unique();
            //larvel automatically create a created at and updated at for that: we will create table time stamps
            $table->foreign('classroom_id')->references('id')->on('classroom')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('subject')->onDelete('cascade');
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
        Schema::dropIfExists('students');
    }
};
