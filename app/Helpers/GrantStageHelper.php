<?php

namespace App\Helpers;

use App\Models\Grant;

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
        $current = date('Y-m-d');
        $fields = self::RATIO_TABLE_FIELDS_AND_STAGES[$grantStageId];
        if($grant->$fields['field_start'] >= $current && $grant->$fields['field_end'] <= $current) {
            return 'current';
        }  elseif ($grant->$fields['field_start'] < $current && $grant->$fields['field_end'] < $current) {
            return 'passed';
        }

        return 'future';
    }
}
