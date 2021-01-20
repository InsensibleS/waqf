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

    public $name = 'Moderate';
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
              $data = $fields->projectStatus;
              $title = ProjectStatus::pluck('title')->get($data - 1);
              switch($title){
                  case 'Archive':
                      return Action::danger('Cannot be changed to "Archive"');
                  case 'On moderation':
                      return Action::danger('Cannot be changed to "On moderation"');
                      break;
              }
              $model-> status_id = $fields->projectStatus;
              $model->update();
          }
        return Action::message('Project status changed "'.  $title .'"');
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
