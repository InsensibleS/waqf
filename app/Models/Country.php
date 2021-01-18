<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory,  SoftDeletes;
    protected $table = 'countries';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'title'
    ];
    public function projects(){
        return $this->hasMany(Project::class);
    }
}
