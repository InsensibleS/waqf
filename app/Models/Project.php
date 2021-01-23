<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    public $timestamps = false;

    protected $table = 'projects';

    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'disposal_date' => 'datetime',
        'publication_date' => 'datetime'
    ];

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

    public function grantStage()
    {
        return $this->belongsTo(GrantStage::class,'grant_stage_id');
    }

    public function hashtags(){
        return $this->belongsToMany(Hashtag::class);
    }

    public function status()
    {
        return $this->belongsTo(ProjectStatus::class,'status_id');
    }
}
