<?php

namespace App\Nova\Actions;

use App\Models\ProjectStatus;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Select;

class Moderation extends Action
{
    use InteractsWithQueue, Queueable;

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
            $model-> status_id = $fields->projectStatus;
            $model->update();
          }
        return Action::message('Project status changed');
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        $statuses = ProjectStatus::all()->pluck('title','id');
        return [
            Select::make('Project Status', 'projectStatus')
                ->sortable()
                ->options( $statuses),
        ];
    }
}
