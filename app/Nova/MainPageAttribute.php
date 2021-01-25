<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Http\Requests\NovaRequest;

class MainPageAttribute extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\MainPageAttribute::class;

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
        'heading',
        'description'
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

            Text::make('Heading', 'heading')
            ->rules('required', 'max:255')
            ->sortable(),

            Textarea::make('Description', 'description')
            ->rules('required')
            ->sortable(),

            Text::make('Email in footer', 'footer_email')
            ->rules('required', 'max:255')
            ->sortable(),

            Text::make('Address in footer', 'footer_address')
                ->rules('required', 'max:255')
                ->sortable(),

            Text::make('Seo title', 'seo_title')
                ->rules('max:255')
                ->sortable(),

            Textarea::make('Seo description', 'seo_description')
                ->rules('max:255')
                ->sortable(),

            Place:: make('Seo keywords', 'seo_keywords')
                -> rules('max:255')
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
