<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerLetter extends Model
{
    use HasFactory;

    const UPDATED_AT = null;

    protected $dates = ['created_at'];
}
