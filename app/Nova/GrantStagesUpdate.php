<?php

namespace App\Nova;

use App\Nova\Actions\UpdateStagesForGrants;
use App\Services\GrantStageProcessingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;

class GrantStagesUpdate extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\GrantStagesUpdate::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Administration';

    public static function availableForNavigation(Request $request)
    {
        return Auth::user()->role->is_admin;
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            DateTime::make('Start process','start_process')
                ->rules('required')
                ->sortable(),

            DateTime::make('End process','end_process')
                ->rules('required')
                ->sortable(),

            BelongsTo::make('Archived Grant', 'archivedGrant', Grant::class)
                 ->sortable(),

            BelongsTo::make('Activated Grant', 'activatedGrant', Grant::class)
                ->sortable(),

            BelongsTo::make('Updated Grant', 'updatedGrant', Grant::class)
                ->sortable(),

            Boolean::make('Completed successfully', 'is_successful'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [
            (new UpdateStagesForGrants(new GrantStageProcessingService))
                ->confirmText('Do you really want to update stages for grants?')
                ->confirmButtonText('Update')
                ->cancelButtonText("Don't update"),
        ];
    }
}
