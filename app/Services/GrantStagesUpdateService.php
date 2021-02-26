<?php

namespace App\Services;

use App\Models\GrantStagesUpdate;

class GrantStagesUpdateService
{
    /**
     *
     * @return array
     */
    public static function getDataForNewGrantStagesUpdate(): array
    {
        return [
            'updated_grant_id' => null,
            'activated_grant_id' => null,
            'archived_grant_id' => null,
            'start_process' => date('Y-m-d H:i:s'),
            'end_process' => '',
            'is_successful' => true
        ];
    }

    /**
     *
     * @param array $dataForNewGrantStagesUpdate
     * @return void
     */
    public static function storeGrantStagesUpdate(array $dataForNewGrantStagesUpdate): void
    {
        $dataForNewGrantStagesUpdate['end_process'] = date('Y-m-d H:i:s');
        GrantStagesUpdate::create($dataForNewGrantStagesUpdate);
    }
}
