<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsLike extends Model
{
    use HasFactory;
    protected $table = 'news_likes';

    protected $fillable = [
        'customer_id',
        'mews_id'
        ];
    public function news()
    {
        return $this->belongsTo(News::class, 'news_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
