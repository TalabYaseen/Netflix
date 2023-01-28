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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            // $table->integer('movie_id');
            $table->string('movie_name');
            // $table->text('movie_picture_id');
            $table->text('movie_description');
            $table->year('movie_gener');
            $table->timestamps();
            // $table->foreign('movie_picture_id')
            // ->references('picture_id')->on('pictures')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
};
