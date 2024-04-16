<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //Tabla de estudiantes
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id()->comment('Llave primaria');
            $table->string('name')->comment('Nombre del estudiante');
            $table->string('surname')->comment('Apellido del estudiante');
            $table->integer('id_number')->unique()->comment('Numero de identificacion');
            $table->date('birth_date')->comment('Fecha de nacimiento del estudiante');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
