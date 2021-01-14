<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use Notifiable, HasFactory,  SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $guarded = ['id'];

    public function status()
    {
        return $this->belongsTo(CustomerStatus::class, 'status_id');
    }
    public function project(){
        return $this->hasMany(Project::class);
    }
}
