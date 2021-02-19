<?php

namespace App\Nova\Actions;

use App\Helpers\GrantStageHelper;
use App\Services\GrantStageProcessingService;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Laravel\Nova\Fields\ActionFields;
use Brightspot\Nova\Tools\DetachedActions\DetachedAction;

class UpdateStagesForGrants extends DetachedAction
{
    use InteractsWithQueue, Queueable;

    protected $grantStageProcessingService;

    /**
     * Create a new command instance.
     *
     * @param GrantStageProcessingService $grantStageProcessingService
     */
    public function __construct(GrantStageProcessingService $grantStageProcessingService)
    {
        $this->grantStageProcessingService = $grantStageProcessingService;
    }

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields)
    {
        $this->grantStageProcessingService->changeGrantsStages(new GrantStageHelper);
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [];
    }
}
