<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsComment extends Model
{
    use HasFactory;

    protected $table = 'news_comments';

    public $timestamps = false;

    protected $casts = [
        'publication_date' => 'date'
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
