<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('mark');

            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('exam_id');

            $table->foreign('subject_id')
                  ->references('id')->on('subjects')
                  ->onDelete('cascade'); 

            $table->foreign('exam_id')
                  ->references('id')->on('exams')
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
        Schema::dropIfExists('results');
    }
}
