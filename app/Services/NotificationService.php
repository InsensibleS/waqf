<?php

namespace App\Services;

use App\Models\Notification;

class NotificationService
{
    /**
     * @param $id int
     * @return void
     */
    public function readNotification(int $id)
    {
        $notification = Notification::find($id);
        $notification->is_read = true;
        $notification->save();
    }
}
