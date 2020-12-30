<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory,  SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
      'name',
      'email',
      'phone',
      'phone_verified_code',
      'phone_verified_at'
      'ending_email_with_link'
      'sending_email_with_password'
      'status_id',
      'api_token',
    ];

    public function status()
    {
        return $this->belongsTo(CustomerStatus::class, 'status_id');
    }
}
