<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotificationPageResource extends JsonResource
{
    protected $notifications;
    protected $numberOfPages;
    protected $notificationFilters;

    public function __construct($notificationsData)
    {
        parent::__construct($notificationsData);
        $this->notifications = $notificationsData['notifications'];
        $this->numberOfPages = $notificationsData['numberOfPages'];
        $this->notificationFilters = $notificationsData['notificationFilters'];
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'notifications' => NotificationResource::collection($this->notifications),
            'numberOfPages' => $this->numberOfPages,
            'notificationFilters' => NotificationFilterResource::collection( $this->notificationFilters)
        ];
    }
}
