<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {
            $table->string('isbn', 45)->primary();
            $table->string('titulo', 45)->nullable($value = false);
            $table->string('autor', 45)->nullable($value = true);
            $table->string('tematica', 45)->nullable($value = true);
            $table->string('editorial', 45)->nullable($value = true);
            $table->date('publicacion')->nullable($value = true);
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
        Schema::dropIfExists('libros');
    }
}
