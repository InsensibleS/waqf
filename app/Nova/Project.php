<?php

namespace App\Nova;

use App\Nova\Actions\Moderation;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\BelongsToMany;

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
                ->rules('required', 'max:255'),

            Image::make('Main image', 'image1')
                ->path('images/projects')
                ->sortable()
                ->creationRules('required', 'max:15000', 'mimes:jpg,gif,png', 'dimensions:max_width=5000, max_height=5000')
                ->updateRules('max:15000', 'mimes:jpg,gif,png', 'dimensions:max_width=5000, max_height=5000'),

            BelongsTo::make('Country', 'country' )
                ->sortable()
                ->withoutTrashed(),

            Date::make('Publication date', 'publication_date')
                ->sortable()
                ->rules('required'),

            BelongsTo::make('Grant', 'grant')
                ->sortable()
                ->withoutTrashed(),

            BelongsTo::make('Grant Stages', 'grantStage', GrantStage::class)
                ->sortable()
                ->default(2)
                ->rules('required')
                ->withoutTrashed()
                ->withMeta(['extraAttributes' => [
                    'readonly' => true
                ]]),

            BelongsTo::make('Project status', 'projectStatus')
                ->sortable()
                ->withoutTrashed(),

            BelongsTo::make('Customer', 'customer')
                ->sortable()
                ->withoutTrashed(),

            Textarea::make('Description', 'description')
                ->hideFromIndex()
                ->rules('required'),

            Date::make('Disposal date', 'disposal_date')
                ->sortable()
                ->hideFromIndex()
                ->rules('required'),

            BelongsToMany::make('Hashtags', 'hashtags', Hashtag::class)
                ->hideFromIndex(),

            Image::make('The second image', 'image2')
                ->path('images/projects')
                ->sortable()
                ->hideFromIndex()
                ->rules('max:15000', 'mimes:jpg,gif,png', 'dimensions:max_width=5000, max_height=5000'),

            Image::make('The third image', 'image3', )
                ->path('images/projects')
                ->sortable()
                ->hideFromIndex()
                ->rules('max:15000', 'mimes:jpg,gif,png', 'dimensions:max_width=5000, max_height=5000'),

            Image::make('The fourth image', 'image4')
                ->path('images/projects')
                ->sortable()
                ->hideFromIndex()
                ->rules('max:15000', 'mimes:jpg,gif,png', 'dimensions:max_width=5000, max_height=5000'),

            Image::make('The fifth image', 'image5')
                ->path('images/projects')
                ->sortable()
                ->hideFromIndex()
                ->rules('max:15000', 'mimes:jpg,gif,png', 'dimensions:max_width=5000, max_height=5000'),
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
            (new Moderation)
        ];
    }
}
