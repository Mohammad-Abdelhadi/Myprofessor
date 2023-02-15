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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_Name')->nullable;
            $table->string('teacher_Major')->nullable;
            $table->string('teacher_Description')->nullable;
            $table->string('teaching_level')->nullable;
            $table->string('Phone')->nullable;
            $table->string('lesson_price')->nullable;
            $table->string('Study_Type')->nullable;
            $table->string('city')->nullable;
            $table->string('address')->nullable;
            $table->string('image')->nullable;
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
        Schema::dropIfExists('teachers');
    }
};
