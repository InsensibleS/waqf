<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrantStage extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'grant_stages';
    protected $dates = ['deleted_at'];

    public function projects(){
        return $this->hasMany(Project::class);
    }
}
