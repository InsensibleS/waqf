<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectStatus extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'project_statuses';
    protected $dates = ['deleted_at'];

    public function project(){
        return $this->hasMany(Project::class);
    }
}
