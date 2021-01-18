<?php

namespace App\Services;

use App\Models\Grant;
use Illuminate\Database\Eloquent\Collection;
use App\Helpers\GrantStageHelper;

class GrantStageProcessingService
{
    private const STATUSES_BLOCKED_FOR_USERS = [1, 8];

    /**
     *
     * @param Grant|null $grant
     * @param Collection $grantStages
     * @return array
     */
    public static function getProcessedGrantStage($grant, Collection $grantStages, GrantStageHelper $grantStageHelper): array
    {
        if ($grant === null) {
            return [];
        }
        $processedGrantStages = [];
        foreach ($grantStages as $grantStage) {
            if (!in_array($grantStage->id, self::STATUSES_BLOCKED_FOR_USERS)) {
                $processedGrantStage = [];
                $processedGrantStage['title'] = $grantStage->title;
                $processedGrantStage['dateStart'] = $grantStageHelper->getDateStage($grantStage->id, $grant, 'field_start');
                $processedGrantStage['dateEnd'] = $grantStageHelper->getDateStage($grantStage->id, $grant, 'field_end');
                $processedGrantStage['status'] = $grantStageHelper->getAnalysisGrantStage($grantStage->id, $grant);

                array_push($processedGrantStages, $processedGrantStage);
            }
        }

        return $processedGrantStages;
    }
}
