<?php

namespace App\Services;

use App\Models\Grant;
use App\Helpers\GrantStageHelper;
use Throwable;

class GrantStageProcessingService
{
    private const STATUSES_BLOCKED_FOR_USERS = [1, 8];

    /**
     *
     * @param Grant|null $grant
     * @param $grantStages
     * @return array
     */
    public static function getProcessedGrantStage($grant, $grantStages, GrantStageHelper $grantStageHelper): array
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

    public function changeGrantsStages(GrantStageHelper $grantStageHelper)
    {
        $dataForNewGrantStagesUpdate = GrantStagesUpdateService::getDataForNewGrantStagesUpdate();

        $grants = Grant::where('grant_stage_id', '!=', 8)->get();

        foreach ($grants as $grant) {
            try{
                $stageId = $grantStageHelper->getGrantStage($grant);
                if($stageId !== null && $stageId !== $grant->grant_stage_id) {
                    $grant->grant_stage_id = $stageId;
                    $grant->save();
                    array_push($dataForNewGrantStagesUpdate['updates_grants_id'], $grant->id);
                 }
            } catch (Throwable $exception) {
                $dataForNewGrantStagesUpdate['is_successful'] = false;
            }
        }
        GrantStagesUpdateService::storeGrantStagesUpdate($dataForNewGrantStagesUpdate);
    }
}
