<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api'], function ($router){

    //Endpoint de metodo GET para obtener los alumnos con las asignaturas asociadas
    Route::get('students', 'App\Http\Controllers\StudentController@students');

    //Endpoint de metodo GET para obtener los asignaturas con los alumnos asociadas
     Route::get('subjects', 'App\Http\Controllers\SubjectController@subjects');
});
