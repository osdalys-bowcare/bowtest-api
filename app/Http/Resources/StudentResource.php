<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\SubjectResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'surname' => $this->surname,
            'id_number' => $this->id_number,
            'birth_date'=> $this->birth_date,
            'subjects' => SubjectResource::collection($this->subjects)
        ];

    }
}
