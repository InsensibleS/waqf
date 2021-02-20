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
}
