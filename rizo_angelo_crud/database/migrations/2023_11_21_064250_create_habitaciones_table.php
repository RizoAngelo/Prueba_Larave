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
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->string('id_habitacion',20)->unique();
            $table->string('nombre_tipo',20);
            $table->float('precio',20);
            $table->enum('estado', ['Activo','Cancelado']);
            $table->string('cantidad_personas',5);
            $table->foreign('nombre_tipo')->references('nombre_tipo')->on('tipohabitaciones');
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
        Schema::dropIfExists('habitaciones');
    }
};
