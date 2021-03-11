<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NotificationQueue implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $description;
    protected $projectNotificationService;
    protected $customer;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($description, $projectNotificationService, $customer)
    {
        $this->projectNotificationService = $projectNotificationService;
        $this->customer = $customer;
        $this->description = $description;
    }

    public function handle()
    {
         $this->projectNotificationService->store($this->description, $this->customer);
    }
}
