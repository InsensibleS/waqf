<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->notificationType->title,
            'icon' => \config('custom.backendUrl') . \config('custom.storagePath') . $this->notificationType->image,
            'description' => $this->description,
            'is_read' => $this->is_read,
            'date' => $this->created_at->format('Y-m-d H:i'),
        ];
    }
}
