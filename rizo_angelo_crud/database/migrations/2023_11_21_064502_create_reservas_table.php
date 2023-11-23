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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('id_reservas',10);
            $table->string('documento',30);
            $table->string('id_habitacion',5);
            $table->string('cantidad_perosnas',5);
            $table->date('fecha_inicio',50);
            $table->date('fecha_final',50);
            $table->string('dias',10);
            $table->foreign('documento')->references('documento')->on('users');
            $table->foreign('id_habitacion')->references('id_habitacion')->on('habitaciones');
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
        Schema::dropIfExists('reservas');
    }
};
