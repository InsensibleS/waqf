<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'avatar' => $this->avatar ? \config('custom.backendUrl') . \config('custom.storagePath') . $this->avatar : null,
            'is_password' => $this->password !== null,
            'status' => $this->status->title,
            'status_image' => \config('custom.backendUrl') . \config('custom.storagePath') . $this->status->image,
            'number_of_projects' => $this->projects->count()
        ];
    }
}
