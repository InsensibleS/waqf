<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\NotificationRequest;
use App\Repositories\NotificationRepository;
use App\Http\Resources\NotificationPageResource;

class NotificationController extends Controller
{
    protected $notificationRepository;

    public function __construct(NotificationRepository $notificationRepository)
    {
        $this->notificationRepository = $notificationRepository;
    }

    public function getNotificationsForProfile(NotificationRequest $request)
    {
        return new NotificationPageResource($this->notificationRepository->getCustomerNotifications($request));
    }
}
