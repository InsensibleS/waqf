<?php

namespace App\Nova;

use App\Nova\Actions\Activate;
use App\Nova\Actions\Disable;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class NewsComment extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\NewsComment::class;

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
        'content',
        'publication_date',
    ];

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Content pages';

    public static function indexQuery(NovaRequest $request, $query)
    {
        return $query->withCount('newsCommentLikes')->withCount('newsCommentDislikes');
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
            BelongsTo::make('News', 'news')->withoutTrashed()
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

            Number::make('Number of likes', 'news_comment_likes_count')
                ->sortable()
                ->onlyOnIndex(),

            Number::make('Number of dislikes', 'news_comment_dislikes_count')
                ->sortable()
                ->onlyOnIndex(),
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
            (new Activate)
                ->showOnTableRow()
                ->exceptOnIndex()
                ->confirmText('Do you really want to Active the comment?')
                ->confirmButtonText('Activate')
                ->cancelButtonText("Don't Activate"),

            (new Disable)
                ->showOnTableRow()
                ->exceptOnIndex()
                ->confirmText('Do you really want to Disable the comment?')
                ->confirmButtonText('Disable')
                ->cancelButtonText("Don't Disable")
        ];
    }
}
