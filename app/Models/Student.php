<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //Relacion de muchas asignaturas
    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
}
