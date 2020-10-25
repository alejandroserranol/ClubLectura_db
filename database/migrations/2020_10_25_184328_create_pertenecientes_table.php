<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertenecientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertenecientes', function (Blueprint $table) {
            $table->string('miembro', 11);
            $table->string('genero', 15);            
            $table->tinyInteger('coordinador')->default('0');
            $table->timestamps();

            $table->primary(['genero', 'miembro']);

            $table->foreign('miembro')->references('dni')->on('miembros')->onDelete('cascade');        
            $table->foreign('genero')->references('genero')->on('grupos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertenecientes');
    }
}
