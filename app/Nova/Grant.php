<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Http\Requests\NovaRequest;

class Grant extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Grant::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

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

            Text::make('Title', 'title')
                ->sortable()
                ->rules('required', 'max:255'),

            Number::make('Cost of participation', 'publication_cost')
                ->sortable()
                ->rules('required'),

            Number::make('Number of semi-finalists', 'number_semifinalists')
                ->sortable()
                ->rules('required'),

            Number::make('Number of finalists', 'number_finalists')
                ->sortable()
                ->rules('required'),

            Date::make('Start of grant', 'start_date')
                ->sortable()
                ->rules('required'),

            Date::make('End of project selection', 'end_selection_projects')
                ->sortable()
                ->rules('required'),

            Date::make('Start moderation', 'start_moderation')
                ->sortable()
                ->rules('required'),

            Date::make('End moderation', 'end_moderation')
                ->sortable()
                ->rules('required'),

            Date::make('Start of qualification', 'start_qualification')
                ->sortable()
                ->rules('required'),

            Date::make('End of qualification', 'end_qualification')
                ->sortable()
                ->rules('required'),

            Date::make('Semifinal start', 'start_semifinal')
                ->sortable()
                ->rules('required'),

            Date::make('End of semi-final', 'end_semifinal')
                ->sortable()
                ->rules('required'),

            Date::make('Finals start', 'start_final')
                ->sortable()
                ->rules('required'),

            Date::make('End of final', 'end_final')
                ->sortable()
                ->rules('required'),

            Date::make('Start of summarizing', 'start_summarizing')
                ->sortable()
                ->rules('required'),

            Date::make('End of grant', 'end_date')
                ->sortable()
                ->rules('required')
                ->readonly(function() {
                    return $this->id === 1 ? true : false;
                }),

            BelongsTo::make('Stage', 'grantStage', GrantStage::class)
                ->sortable()
                ->default(1)
                ->rules('required')
                ->withoutTrashed()
                ->withMeta(['extraAttributes' => [
                    'readonly' => true
                ]]),
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
        return [];
    }
}
