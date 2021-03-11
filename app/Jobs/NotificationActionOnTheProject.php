<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NotificationActionOnTheProject implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected $model;
    protected $actionOnTheProject;
    protected $projectNotificationService;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($model, $actionOnTheProject, $projectNotificationService )
    {
        $this->model = $model;
        $this->actionOnTheProject = $actionOnTheProject;
        $this->projectNotificationService = $projectNotificationService;
    }

    public function handle()
    {
     $this->projectNotificationService->CreateProjectNotification($this->model, $this->actionOnTheProject);
    }
}
