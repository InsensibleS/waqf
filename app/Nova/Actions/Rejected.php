<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;

class Rejected extends Action
{
    use InteractsWithQueue, Queueable;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public $name = 'Reject';

    public function handle(ActionFields $fields, Collection $models)
    {
        foreach ($models as $model) {

            $data = 3;
            $model-> status_id = $data;
            $model->update();
            return Action::message('Project status changed "Reject"');
        }
    }

    public function actionClass()
    {
        return 'bg-danger text-white';
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
