<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //Tabla de usuarios
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->comment('Llave primaria');
            $table->string('name')->comment('Nombre del usuario');
            $table->string('email')->unique()->comment('Correo del usuario');
            $table->timestamp('email_verified_at')->nullable()->comment('Fecha de verificacion de correo');
            $table->string('password')->nulllable()->comment('Contraseña del usuario');
            $table->rememberToken()->comment('Token');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
