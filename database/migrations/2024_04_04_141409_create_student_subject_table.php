<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //Tabla pivote de asignaturas
    public function up(): void
    {
        Schema::create('student_subject', function (Blueprint $table) {
            $table->id()->comment('Llave primaria');
            $table->unsignedBigInteger('student_id')->comment('Llave foranea a la tabla estudiantes');
            $table->unsignedBigInteger('subject_id')->comment('Llave foranea a la tabla asignaturas');
            $table->timestamps();

            //Conexiones a las tablas estudiantes y asignaturas
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('subject_id')->references('id')->on('subjects');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_subject');
    }
};
