<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TodoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'tile' => $this->title,
            'description' => $this->description,
            'is_completed' => $this->is_completed,
            'due_date' => $this->due_date,
            'create_at' => $this->created_at
        ];
    }
}
