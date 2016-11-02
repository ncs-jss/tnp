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
            $table->string('Xmarks')->default("0");
            $table->string('XIImarkstype');
            $table->string('XIImarks')->default("0");
            $table->string('sem1')->default("0");
            $table->string('sem2')->default("0");
            $table->string('sem3')->default("0");
            $table->string('sem4')->default("0");
            $table->string('sem5')->default("0");
            $table->string('sem6')->default("0");
            $table->string('sem7')->default("0");
            $table->string('sem8')->default("0");
            $table->string('diplomayr1')->default("0");
            $table->string('diplomayr2')->default("0");
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
