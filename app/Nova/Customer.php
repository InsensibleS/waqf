<?php

namespace App\Nova;

use App\Nova\Actions\ActivateCustomer;
use App\Nova\Actions\ActivateProjectComment;
use App\Nova\Actions\DisableCustomer;
use App\Nova\Actions\DisableProjectComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Customer extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Customer::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name',
        'email',
        'phone'
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

            Text::make('Name', 'name')
                ->sortable()
                ->rules('max:255'),

            Avatar::make('Avatar', 'avatar')->path('/customer-photos'),

            Text::make('Email')
                ->sortable()
                ->rules('required', 'email', 'max:255')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),

            BelongsTo::make('Status', 'status', CustomerStatus::class)
                ->rules('required')->withoutTrashed(),

            Text::make('Phone', 'phone')
                ->sortable()
                ->rules('max:255'),

            Boolean::make('Active customer', 'is_active'),
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
            (new ActivateCustomer)
                ->showOnTableRow()
                ->exceptOnIndex()
                ->confirmText('Do you really want to Active the customer?')
                ->confirmButtonText('Activate')
                ->cancelButtonText("Don't Activate"),

            (new DisableCustomer)
                ->showOnTableRow()
                ->exceptOnIndex()
                ->confirmText('Do you really want to Disable the customer?')
                ->confirmButtonText('Disable')
                ->cancelButtonText("Don't Disable")
        ];
    }
}
