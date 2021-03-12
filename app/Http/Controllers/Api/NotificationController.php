<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\NotificationRequest;
use App\Http\Requests\ReadNotificationRequest;
use App\Repositories\NotificationRepository;
use App\Http\Resources\NotificationPageResource;
use App\Services\NotificationService;

class NotificationController extends Controller
{
    protected $notificationRepository;
    protected $notificationService;

    public function __construct(NotificationRepository $notificationRepository, NotificationService $notificationService)
    {
        $this->notificationRepository = $notificationRepository;
        $this->notificationService = $notificationService;
    }

    public function getNotificationsForProfile(NotificationRequest $request)
    {
        return new NotificationPageResource($this->notificationRepository->getCustomerNotifications($request));
    }

    public function readNotification(ReadNotificationRequest $request)
    {
        $this->notificationService->readNotification($request->notification_id);

        return response()->json(['message' => 'Notification read successfully.']);
    }
}
