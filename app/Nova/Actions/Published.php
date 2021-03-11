<?php

namespace App\Nova\Actions;

use App\Jobs\NotificationActionOnTheProject;
use App\Services\ProjectNotificationService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;;

class Published extends Action
{
    use InteractsWithQueue, Queueable;

    use DispatchesJobs;

    public $name = 'Publish';

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        foreach ($models as $model) {
            if($model->status_id !== 2) {
                return Action::danger('You can only change the status of the project under moderation!');
            } else {
                $model->status_id = 1;
                $model->update();
                $actionOnTheProject = 'Publish';
                $this->dispatch(new NotificationActionOnTheProject($model, $actionOnTheProject, new ProjectNotificationService()));
                return Action::message('Project status changed "Publish"');
            }
        }
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */

    public function fields()
    {
        return [];
    }
}
