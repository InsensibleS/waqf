<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class ProjectComment extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\ProjectComment::class;

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
    public static $group = 'Grants & Projects';

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
            BelongsTo::make('Project', 'project')->withoutTrashed()
                ->withMeta(['extraAttributes' => [
                    'readonly' => true
                ]])
                ->hideFromIndex(),

            Belongsto::make('Customer', 'customer')->withoutTrashed()
                ->withMeta(['extraAttributes' => [
                    'readonly' => true
                ]]),

            Textarea::make('Content', 'content')
                ->withMeta(['extraAttributes' => [
                    'readonly' => true
                ]])
                ->showOnIndex()
                ->displayUsing(function ($content) {
                    return Str::limit($content, 70);
                }),

            Date::make('Publication date','publication_date')
                ->withMeta(['extraAttributes' => [
                    'readonly' => true
                ]])
                ->sortable(),

            Boolean::make('Active comment', 'is_active'),

//            Number::make('Number of likes', 'news_comment_likes_count')->sortable(),
//
//            Number::make('Number of dislikes', 'news_comment_dislikes_count')->sortable(),
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
