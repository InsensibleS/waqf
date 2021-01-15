<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\HasOne;

class Project extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Project::class;

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

            Text::make('Title','title')
                ->rules('required'),

            Textarea::make('Description', 'description')
                ->rules('required'),

            DateTime::make('Publication date', 'publication_date')
                ->sortable()
                ->rules('required'),

            DateTime::make('Disposal date', 'disposal_date')
                ->sortable()
                ->rules('required'),

            BelongsTo::make('Country', 'country' )
                ->sortable()
                ->withoutTrashed(),

            BelongsTo::make('Grant', 'grant')
                ->sortable()
                ->withoutTrashed(),

            BelongsTo::make('Project status', 'projectStatus')
                ->sortable()
                ->withoutTrashed(),

            BelongsTo::make('Customer', 'customer')
                ->sortable()
                ->withoutTrashed(),

            BelongsTo::make('Grant Stages', 'grantStages', GrantStages::class)
                ->sortable()
                ->default(2)
                ->rules('required')
                ->withoutTrashed()
                ->withMeta(['extraAttributes' => [
                    'readonly' => true
                ]]),

            Image::make('Main image', 'image1')
                ->path('images/project')
                ->sortable()
                ->rules('required'),

            Image::make('The second image', 'image2')
                ->path('images/project')
                ->sortable(),

            Image::make('The third image', 'image3')
                ->path('images/project')
                ->sortable(),

            Image::make('The fourth image', 'image4')
                ->path('images/project')
                ->sortable(),

            Image::make('The fifth image', 'image5')
                ->path('images/project')
                ->sortable(),
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
