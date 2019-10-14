<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpreuvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epreuves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');   // mathematique, fancais, ...
            $table->string('status');  // 0= epreuve et 1= corrections
            $table->string('file_link'); // links du fichier
            $table->string('session');   // session 2013, 2016, ...
            $table->integer('download_number');  // numbre de telechargemnt
            $table->string('comment');  // commentaies (impression)
            $table->string('serie', '20');  // commentaies (impression)
            $table->unsignedBigInteger('examen_id')->nullable();  // bepc, bac, proba, gco, gca.
            // $table->foreign('examen_id')->references('id')->on('epreuves')->onDelete('cascade');
            $table->unsignedBigInteger('matiere_id')->nullable();  // bepc, bac, proba, gco, gca.
            // $table->foreign('matiere_id')->references('id')->on('epreuves')->onDelete('cascade');
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
        Schema::dropIfExists('epreuves');
    }
}
