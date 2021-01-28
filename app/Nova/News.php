<?php

namespace App\Nova;

use Froala\NovaFroalaField\Froala;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Image;
use App\Rules\СomparisonOfBooleanFields;
use Laravel\Nova\Http\Requests\NovaRequest;

class News extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\News::class;

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
        'title',
        'description',
        'publication_date'
    ];

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Content pages';

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
            ->rules('required', 'max:255')
            ->sortable(),

            Image::make('Image', 'image')
            ->path('/images/news')
            ->creationRules('required', 'max:5000')
            ->updateRules('max:5000')
            ->deletable(false),

            Text::make('Small description', 'description')
            ->hideFromIndex(),

            Froala::make('Full description', 'full_description')
                ->withFiles('public')
                ->path('/images/news')
                ->creationRules('required')
                ->alwaysShow(),

            DateTime::make('Date','publication_date')
            ->hideFromIndex()
            ->rules('required')
            ->sortable(),

            Boolean::make('OF comments', 'ban_comments')
                ->hideFromIndex(),

            Boolean::make('Main news', 'is_main')
                ->rules( new СomparisonOfBooleanFields($request->is_main, $request->is_second)),

            Boolean::make('Priority news', 'is_second')
                ->rules( new СomparisonOfBooleanFields($request->is_main, $request->is_second)),
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
