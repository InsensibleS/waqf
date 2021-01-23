<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Grant extends Model
{
    use HasFactory;

    protected $dates = ['deleted_at'];

    protected $casts = [
        'start_date' => 'date',
        'end_selection_projects' => 'date',
        'start_moderation' => 'date',
        'end_moderation' => 'date',
        'start_qualification' => 'date',
        'end_qualification' => 'date',
        'start_semifinal' => 'date',
        'end_semifinal' => 'date',
        'start_final' => 'date',
        'end_final' => 'date',
        'start_summarizing' => 'date',
        'end_date' => 'date'
    ];

    public function grantStage()
    {
        return $this->belongsTo(GrantStage::class, 'grant_stage_id');
    }

    public function projects(){
        return $this->hasMany(Project::class);
    }

    public function customerProjects(){
        return $this->hasMany(Project::class)->where('customer_id', Auth::id());
    }
}
