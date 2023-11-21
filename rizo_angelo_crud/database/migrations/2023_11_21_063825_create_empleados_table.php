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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('documento',20);
            $table->enum('tipo_documento', ['CC','Pasarporte','CC extranjera']);
            $table->string('nombre',25);
            $table->float('salario');
            $table->string('segundo_apellido',25)->nullable();
            $table->string('telefono')->unique();
            $table->string('email',60)->unique();
            $table->string('password',20);
            $table->foreignId('id_roles');
            $table->foreign('id_roles')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
