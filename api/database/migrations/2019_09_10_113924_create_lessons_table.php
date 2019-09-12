<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lesson_title');
            $table->string('lesson_image')->nullable();
            $table->text('lesson_text')->nullable();
            $table->text('lesson_level')->nullable();
            $table->string('lesson_duration')->nullable();
            $table->string('local_video_link')->nullable();
            $table->string('downloadable_files')->nullable();
            $table->string('created_by')->nullable();
            $table->unsignedBigInteger('course_id')->nullable();
            //$table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
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
        Schema::dropIfExists('lessons');
    }
}
