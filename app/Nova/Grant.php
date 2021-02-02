<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Date;
use App\Rules\ValidLateDate;
use App\Rules\ValidEqualDate;
use App\Rules\ParticipationInOtherGrants;
use App\Repositories\GrantRepository;
use App\Rules\ComparisonOfNumbers;

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
        'title',
        'publication_cost',
    ];

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Grants & Projects';

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

            Text::make('Title', 'title')
                ->sortable()
                ->rules('required', 'max:255'),

            Number::make('Cost of participation $', 'publication_cost')
                ->sortable()
                ->rules('required', 'gte:0'),

            Number::make('Number of semi-finalists', 'number_semifinalists')
                ->sortable()
                ->rules(
                    'required',
                    'gte:1',
                    new ComparisonOfNumbers($request->number_finalists, $request->number_semifinalists)
                ),

            Number::make('Number of finalists', 'number_finalists')
                ->sortable()
                ->rules(
                    'required',
                    'gte:1',
                    new ComparisonOfNumbers($request->number_finalists, $request->number_semifinalists)
                ),

            Heading::make('Project selection'),

            Date::make('Start of grant', 'start_date')
                ->sortable()
                ->rules(
                    'required',
                    new ValidLateDate(
                        date('Y-m-d'),
                        $request->start_date,
                        "The start date of the grant cannot be earlier than tomorrow's date.",
                    ),
                    new ParticipationInOtherGrants(
                        new GrantRepository(),
                        $request->end_date,
                        $request->resourceId,
                        false
                    )
                ),

            Date::make('End of project selection', 'end_selection_projects')
                ->sortable()
                ->rules(
                    'required',
                    new ValidEqualDate(
                        $request->start_date,
                        $request->end_selection_projects,
                        'The end date of the project selection cannot be earlier than the start of the grant.',
                    ),
                    new ParticipationInOtherGrants(
                        new GrantRepository(),
                        $request->start_date,
                        $request->resourceId,
                        true
                    )
                )-> hideFromIndex(),

            Heading::make('Moderation'),

            Date::make('Start moderation', 'start_moderation')
                ->sortable()
                ->rules(
                    'required',
                    new ValidLateDate(
                        $request->end_selection_projects,
                        $request->start_moderation,
                        "The moderation start date must be later than the end of the project selection period.",
                    ),
                    new ParticipationInOtherGrants(
                        new GrantRepository(),
                        $request->start_date,
                        $request->resourceId,
                        true
                    )
                )-> hideFromIndex(),

            Date::make('End moderation', 'end_moderation')
                ->sortable()
                ->rules(
                    'required',
                    new ValidEqualDate(
                        $request->start_moderation,
                        $request->end_moderation,
                        'The end date of moderation cannot be earlier than the start date of moderation.',
                    ),
                    new ParticipationInOtherGrants(
                        new GrantRepository(),
                        $request->start_date,
                        $request->resourceId,
                        true
                    )
                )-> hideFromIndex(),

            Heading::make('Qualification'),

            Date::make('Start of qualification', 'start_qualification')
                ->sortable()
                ->rules(
                    'required',
                    new ValidLateDate(
                        $request->end_moderation,
                        $request->start_qualification,
                        "Qualification start date must be later than the end of project moderation.",
                    ),
                    new ParticipationInOtherGrants(
                        new GrantRepository(),
                        $request->start_date,
                        $request->resourceId,
                        true
                    )
                )-> hideFromIndex(),

            Date::make('End of qualification', 'end_qualification')
                ->sortable()
                ->rules(
                    'required',
                    new ValidEqualDate(
                        $request->start_qualification,
                        $request->end_qualification,
                        'The end date of the qualification cannot be earlier than the start of the qualification.',
                    ),
                    new ParticipationInOtherGrants(
                        new GrantRepository(),
                        $request->start_date,
                        $request->resourceId,
                        true
                    )
                )-> hideFromIndex(),

            Heading::make('Semifinal'),

            Date::make('Semifinal start', 'start_semifinal')
                ->sortable()
                ->rules(
                    'required',
                    new ValidLateDate(
                        $request->end_qualification,
                        $request->start_semifinal,
                        "The start of the semi-final must be later than the end of the qualification.",
                    ),
                    new ParticipationInOtherGrants(
                        new GrantRepository(),
                        $request->start_date,
                        $request->resourceId,
                        true
                    )
                )-> hideFromIndex(),

            Date::make('End of semi-final', 'end_semifinal')
                ->sortable()
                ->rules(
                    'required',
                    new ValidEqualDate(
                        $request->start_semifinal,
                        $request->end_semifinal,
                        'The end date of the semi-final cannot be earlier than the start date of the semi-final.',
                    ),
                    new ParticipationInOtherGrants(
                        new GrantRepository(),
                        $request->start_date,
                        $request->resourceId,
                        true
                    )
                )-> hideFromIndex(),

            Heading::make('Final'),

            Date::make('Finals start', 'start_final')
                ->sortable()
                ->rules(
                    'required',
                    new ValidLateDate(
                        $request->end_semifinal,
                        $request->start_final,
                        "The beginning of the final must be later than the end of the semi-final.",
                    ),
                    new ParticipationInOtherGrants(
                        new GrantRepository(),
                        $request->start_date,
                        $request->resourceId,
                        true
                    )
                )-> hideFromIndex(),

            Date::make('End of final', 'end_final')
                ->sortable()
                ->rules(
                    'required',
                    new ValidEqualDate(
                        $request->start_final,
                        $request->end_final,
                        'The end date of the final cannot be earlier than the start date of the final.',
                    ),
                    new ParticipationInOtherGrants(
                        new GrantRepository(),
                        $request->start_date,
                        $request->resourceId,
                        true
                    )
                )-> hideFromIndex(),

            Heading::make('Summarize'),

            Date::make('Start of summarizing', 'start_summarizing')
                ->sortable()
                ->rules(
                    'required',
                    new ValidLateDate(
                        $request->end_final,
                        $request->start_summarizing,
                        "The start of summing up must be later than the end of the final.",
                    ),
                    new ParticipationInOtherGrants(
                        new GrantRepository(),
                        $request->start_date,
                        $request->resourceId,
                        true
                    )
                )-> hideFromIndex(),


            Date::make('End of grant', 'end_date')
                ->sortable()
                ->rules(
                    'required',
                    new ValidEqualDate(
                        $request->start_summarizing,
                        $request->end_date,
                        'The end date of the grant cannot be earlier than the start date of the summing up.',
                    ),
                    new ParticipationInOtherGrants(
                        new GrantRepository(),
                        $request->start_date,
                        $request->resourceId,
                        true
                    )
                )
                ->readonly(function() {
                    return $this->id === 1 ? true : false;
                }),

            Heading::make(''),

            BelongsTo::make('Stage', 'grantStage', GrantStage::class)
                ->sortable()
                ->default(1)
                ->rules('required')
                ->withoutTrashed()
                ->withMeta(['extraAttributes' => [
                    'readonly' => true
                ]]),

            HasMany::make('Projects', 'projects', Project::class)
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
