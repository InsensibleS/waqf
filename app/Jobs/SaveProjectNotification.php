<?php

namespace App\Jobs;

use App\Models\Notification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SaveProjectNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $customer;
    protected $description;
    protected $type;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($customer, $description, $type)
    {
        $this->customer = $customer;
        $this->description = $description;
        $this->type = $type;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Notification $notification)
    {
     $notification->customer_id = $this->customer;
     $notification->description = $this->description;
     $notification->type_id = $this->type;

     $notification->save();
    }
}
