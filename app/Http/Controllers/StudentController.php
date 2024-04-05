<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
    * @OA\Get(
    *     path="/api/students",
    *     summary="Mostrar todos los estudiantes con asignaturas asociadas",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los estudiantes con asignaturas asociadas"
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */

    public function students ()
    {
        $students = Student::has('subjects')->with('subjects')->get();

        return response()->json($students);
    }
}
