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
            'updates_grants_id' => [],
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
        $dataForNewGrantStagesUpdate['updates_grants_id'] = $dataForNewGrantStagesUpdate['updates_grants_id'] ? implode(', ', $dataForNewGrantStagesUpdate['updates_grants_id']) : '-';
        GrantStagesUpdate::create($dataForNewGrantStagesUpdate);
    }
}
