<?php


namespace App\Services;

use App\Http\Controllers\Controller;
use App\Jobs\NotificationActionOnTheProject;
use App\Models\Notification;
use Illuminate\Foundation\Bus\DispatchesJobs;



class ProjectNotificationService
{
    use DispatchesJobs;


    /**
     *The constant refers to the id in the notification_type table, denotes the message type
     */
    const TYPE = 8;

    protected $customer;
    protected $description;
    protected $type;


    public function CreateProjectNotification($model, $actionOnTheProject)
    {
        $customer= $model->customer_id;
        $description = 'The status of your project has been changed to "' . $actionOnTheProject . '"';
        self::store($customer, $description);
    }

    public function store($customer, $description)
    {
        Notification::create([
            'customer_id' => $customer,
            'description' => $description,
            'type_id' => self::TYPE
        ]);
    }
}
