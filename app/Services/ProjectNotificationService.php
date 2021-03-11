<?php


namespace App\Services;

use App\Http\Controllers\Controller;
use App\Jobs\NotificationQueue;
use App\Models\Notification;
use Illuminate\Foundation\Bus\DispatchesJobs;



class ProjectNotificationService
{
    use DispatchesJobs;


    /**
     *The constant refers to the id in the notification_type table, denotes the message type
     */
    const TYPE = 8;

    public function CreateProjectNotification($actionOnTheProject, $model, $projectNotificationService)
    {
        $customer= $model->customer_id;
        $description = 'The status of your project has been changed to "' . $actionOnTheProject . '"';
        $this->dispatch(new NotificationQueue($description, $projectNotificationService, $customer));
    }

    public function store($description, $customer)
    {
        Notification::create([
            'customer_id' => $customer,
            'description' => $description,
            'type_id' => self::TYPE
        ]);
    }
}
