<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createbook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('isbn');
            $table->string('autor');
            $table->decimal('preco');
            // $table->unsignedBigInteger('genero_id');

            // $table->foreign('genero_id')->references('id')->on('genero');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
