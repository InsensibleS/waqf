<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use App\Http\Controllers\Jobs\SaveProjectNotificationController;


class Published extends Action
{
    use InteractsWithQueue, Queueable;

    public $name = 'Publish';

    protected $saveProjectNotificationController;
    /**
     * Create a new command instance.
     *
     * @param SaveProjectNotificationController $saveProjectNotificationController
     */

    public function __construct(SaveProjectNotificationController $saveProjectNotificationController)
    {
        $this->saveProjectNotificationController = $saveProjectNotificationController;
    }
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
                $model->project_id;
                $this->saveProjectNotificationController->SavingPublishedProjectNotification($model);
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
