<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "user_id" => $this->user_id,
            "full_name" => $this->full_name,
            "company" => $this->company,
            "phone_number" => $this->phone_number,
            "email" => $this->email,
            "birth_date" => $this->birth_date,
            "photo_url" => $this->photo_url,
        ];
    }
}
