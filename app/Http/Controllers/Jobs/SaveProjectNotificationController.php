<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use App\Jobs\SaveProjectNotification;
use Illuminate\Http\Request;

const TYPE = 8;

class SaveProjectNotificationController extends Controller
{
    public function SavingPublishedProjectNotification($model){
        $customer= $model->customer_id;
        $type = TYPE;
        $description = 'The status of your project has been changed to "Published"';
        $this->dispatch(new SaveProjectNotification($customer, $description, $type));
    }

    public function SavingRejectedProjectNotification($model){
        $customer= $model->customer_id;
        $type = TYPE;
        $description = 'Your project was rejected by the moderator';
        $this->dispatch(new SaveProjectNotification($customer, $description, $type));
    }
}
