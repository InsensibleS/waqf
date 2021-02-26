<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrantStagesUpdate extends Model
{
    use HasFactory;

    protected $table = 'grant_stages_updates';

    protected $guarded = ['id'];

    protected $casts = [
        'start_process' => 'datetime',
        'end_process' => 'datetime',
    ];

    public $timestamps = false;

    public function archivedGrant()
    {
        return $this->belongsTo(Grant::class, 'archived_grant_id');
    }

    public function activatedGrant()
    {
        return $this->belongsTo(Grant::class, 'activated_grant_id');
    }

    public function updatedGrant()
    {
        return $this->belongsTo(Grant::class, 'updated_grant_id');
    }
}
