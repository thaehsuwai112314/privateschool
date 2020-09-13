<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
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
            $table->text('address');
            $table->string('phoneno');
            $table->string('nrc');
            $table->text('photo');
            $table->integer('salary');


            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('subject_id');
      

            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade'); 
            $table->foreign('subject_id')
                  ->references('id')->on('subjects')
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
        Schema::dropIfExists('teachers');
    }
}
