<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('marks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned()->length(10);
            $table->boolean('diploma');
            $table->string('Xmarkstype');
            $table->string('Xmarks');
            $table->string('XIImarkstype');
            $table->string('XIImarks');
            $table->string('sem1');
            $table->string('sem2');
            $table->string('sem3');
            $table->string('sem4');
            $table->string('sem5');
            $table->string('sem6');
            $table->string('sem7');
            $table->string('sem8');
            $table->string('diplomayr1');
            $table->string('diplomayr2');
            $table->timestamps();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('marks');
    }
}
