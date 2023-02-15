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
        Schema::create('carts', function (Blueprint $table) {
            // order number 

            $table->id();
            $table->string('s_id')->nullable;
            $table->string('t_id')->nullable;

            //teacher information
            $table->string('name')->nullable;
            $table->string('teacher_Major')->nullable;
            $table->string('teaching_level')->nullable;
            $table->string('t_phone')->nullable;
            $table->string('city');
            $table->string('address');

            // معلومات مشتركة بين الطرفين الاستاذ والطالب
            $table->datetime('time')->nullable;
        
            
            // $table->datetime('time')->nullable;

            $table->string('lesson_price')->nullable;
            $table->string('Study_Type')->nullable;
            $table->string('status')->nullable;
            
            // student information
            $table->string('stu_phone')->nullable;
            $table->string('stu_name')->nullable;
            $table->string('stu_city')->nullable;
            $table->string('stu_address')->nullable;

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
        Schema::dropIfExists('carts');
    }
};
