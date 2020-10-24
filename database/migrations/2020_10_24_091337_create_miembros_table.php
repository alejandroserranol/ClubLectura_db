<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miembro', function (Blueprint $table) {
            $table->string('dni', 11)->primary();
            $table->string('nombre', 45)->nullable($value = true);
            $table->string('apellido', 45)->nullable($value = true);
            $table->string('email', 45)->unique()->nullable($value = false);
            $table->string('telefono', 45)->nullable($value = true);
            $table->string('direccion', 45)->nullable($value = true);
            $table->tinyInteger('situacion_actual')->default('1');
            $table->date('fecha_alta')->nullable($value = false);
            $table->date('fecha_baja')->nullable($value = true);
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
        Schema::dropIfExists('miembros');
    }
}
