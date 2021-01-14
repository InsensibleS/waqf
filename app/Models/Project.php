<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'project_statuses';
    protected $dates = ['deleted_at'];
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
    public function grant()
    {
        return $this->belongsTo(Grant::class, 'grant_id');
    }
    public function projectStatus()
    {
        return $this->belongsTo(ProjectStatus::class, 'status_id');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }
    public function grantStages()
    {
        return $this->belongsTo(GrantStage::class,'grant_stage_id');
    }
}
