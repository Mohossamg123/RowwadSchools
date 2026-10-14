<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AnnouncementResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'content' => $this->content,
            'image' => $this->image,
            'category' => $this->category,
            'features' => $this->features ?? [],
            'bottom_image' => $this->bottom_image,
            'content_2' => $this->content_2,
            'start_date' => $this->start_date,
            'sort_order' => $this->sort_order,
            'status' => $this->status,
        ];
    }
}
