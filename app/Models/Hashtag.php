<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hashtag extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'hashtags';
    protected $dates = ['deleted_at'];

    public function projects(){
        return $this->belongsToMany(Project::class);
    }
}
