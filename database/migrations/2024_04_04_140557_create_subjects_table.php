<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //Tabla de asignaturas
    public function up(): void
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id()->comment('Llave primaria');
            $table->string('name')->comment('nombre de la materia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
