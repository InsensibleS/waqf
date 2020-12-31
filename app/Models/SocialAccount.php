<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    use HasFactory;

    protected $table = "social_accounts";

    protected $fillable = [
        'customer_id',
        'customer_id_by_provider',
        'provider',
        'token'
    ];

    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
