<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debates', function (Blueprint $table) {
            $table->string('codigo', 15)->primary();
            $table->string('curso', 11)->nullable($value = false);
            $table->string('genero', 15)->nullable($value = false);           
            $table->string('libro', 45)->nullable($value = true);
            $table->date('fecha_baja')->nullable($value = true);
            $table->timestamps();

            $table->foreign('genero')->references('genero')->on('grupos')->onDelete('cascade');        
            $table->foreign('libro')->references('isbn')->on('libros')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('debates');
    }
}
