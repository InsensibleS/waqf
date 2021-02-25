<?php

namespace App\Helpers;

use App\Models\Grant;
use Carbon\Carbon;

class GrantStageHelper
{
    private const RATIO_TABLE_FIELDS_AND_STAGES = [
        1 => [
            'field_start' => '',
            'field_end' => 'start_date'
        ],
        2 => [
            'field_start' => 'start_date',
            'field_end' => 'end_selection_projects'
        ],
        3 => [
            'field_start' => 'start_moderation',
            'field_end' => 'end_moderation'
        ],
        4 => [
            'field_start' => 'start_qualification',
            'field_end' => 'end_qualification'
        ],
        5 => [
            'field_start' => 'start_semifinal',
            'field_end' => 'end_semifinal'
        ],
        6 => [
            'field_start' => 'start_final',
            'field_end' => 'end_final'
        ],
        7 => [
            'field_start' => 'start_summarizing',
            'field_end' => 'end_date'
        ],
        8 => [
            'field_start' => 'end_date',
            'field_end' => ''
        ],
    ];

    /**
     *
     * @param int $grantStageId
     * @param Grant $grant
     * @return string
     */
    public function getAnalysisGrantStage(int  $grantStageId, Grant $grant): string
    {
        $fields = self::RATIO_TABLE_FIELDS_AND_STAGES[$grantStageId];
        $current = date('Y-m-d');
        $startDate =  date('Y-m-d', strtotime($grant->{$fields['field_start']}));
        $endDate =  date('Y-m-d', strtotime($grant->{$fields['field_end']}));

        if($startDate <= $current && $endDate >= $current) {
            return 'current';
        }  elseif ($startDate < $current && $endDate < $current) {
            return 'passed';
        }

        return 'future';
    }

    /**
     *
     * @param int $grantStageId
     * @param Grant $grant
     * @param string $fieldName
     *
     * @return string
     */
    public function getDateStage(int  $grantStageId, Grant $grant, string $fieldName) {
        $fieldInGrantTable = self::RATIO_TABLE_FIELDS_AND_STAGES[$grantStageId][$fieldName];

        return date('Y-m-d', strtotime($grant->$fieldInGrantTable));
    }

    /**
     *
     * @param Grant $grant
     *
     * @return integer|null
     */
    public function getGrantStage(Grant $grant): ?int
    {
        foreach (self::RATIO_TABLE_FIELDS_AND_STAGES as $stageId => $dates) {
            $current = Carbon::now()->setTimezone(\config('app.timezone'))->format('Y-m-d');
            $startDate = Carbon::parse($grant->{$dates['field_start']})->setTimezone(\config('app.timezone'))->format('Y-m-d');
            $endDate = Carbon::parse($grant->{$dates['field_end']})->setTimezone(\config('app.timezone'))->format('Y-m-d');
            if ($stageId === 8) {
                $endDate =Carbon::parse('2150-12-31');
            }
            if($stageId === 1) {
                if($startDate < $current && $endDate > $current) {
                    return $stageId;
                }
            } elseif($startDate <= $current && $endDate >= $current) {
                return $stageId;
            }
        }
        return null;
    }
}
