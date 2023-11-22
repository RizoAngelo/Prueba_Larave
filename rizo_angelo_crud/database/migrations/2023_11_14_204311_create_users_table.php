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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('documento',50)->unique();
            $table->enum('tipo_documento', ['CC','Pasarporte','CC extranjera']);
            // $table->string('tipo_documento',20);
            $table->string('nombre',25);
            $table->string('primer_apellido',25);
            $table->string('segundo_apellido',25)->nullable();
            $table->string('telefono')->unique();
            $table->string('email',60)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',20);
            $table->rememberToken();
            $table->foreignId('id_roles')->default('1');
            $table->foreign('id_roles')->references('id')->on('roles');
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
        Schema::dropIfExists('users');
    }
};
