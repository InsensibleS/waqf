<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Actions\DestructiveAction;

class Rejected extends DestructiveAction
{
    use InteractsWithQueue, Queueable;

    public $name = 'Reject';

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
            if(!$model->status_id !== 2) {
                return Action::danger('You can only change the status of the project under moderation!');
            } else {
                $model->status_id = 3;
                $model->update();
                return Action::message('Project status changed "Reject"');
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
