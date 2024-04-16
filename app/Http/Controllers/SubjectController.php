<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Http\Resources\SubjectResource;

class subjectController extends Controller
{
    /**
    * @OA\Get(
    *     path="/api/subjects",
    *     summary="Mostrar todos las asignaturas con los estudiantes asociadas",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos las asignaturas con los estudiantes asociadas"
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */

    //Funcion GET para listar todas las asignaturas
    public function subjects ()
    {
        $subjects = Subject::has('students')->with('students')->get();

        return response()->json(SubjectResource::collection($subjects));
    }
}
