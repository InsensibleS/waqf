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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function status()
    {
        return $this->belongsTo(CustomerStatus::class, 'status_id');
    }
    public function projects(){
        return $this->hasMany(Project::class);
    }

    public function newlike(){
        return $this->hasOne(NewsLike::class);
    }
}
