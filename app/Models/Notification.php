<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['created_at'];

    public function notificationType()
    {
        return $this->belongsTo(NotificationType::class, 'type_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
