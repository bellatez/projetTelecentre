<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('isbn');
            $table->string('edition_date');
            $table->string('image_links');
            $table->string('file_links');
            $table->string('comments');
            $table->unsignedBigInteger('author_id')->nullable();
            $table->unsignedBigInteger('categorie_id')->nullable();
            // $table->foreign('author_id')->references('id')->on('documents')->onDelete('cascade');
            // $table->foreign('categorie_id')->references('id')->on('documents')->onDelete('cascade');
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
        Schema::dropIfExists('books');
    }
}
