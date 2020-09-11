<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table)
        {
            $table->id();
            $table->string('enrollno');
            $table->text('photo');
            $table->string('email');
            $table->string('address');
            $table->integer('dob'); 
            $table->string('fname');
            $table->text('payment');
            $table->string('class');
            
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('class_id');

             
            $table->foreign('subject_id')
                  ->references('id')->on('subjects')
                  ->onDelete('cascade'); 
                  
             $table->foreign('class_id')
                   ->references('id')->on('classes')
                   ->onDelete('cascade');

         
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
}
