<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsHashtag extends Model
{
    use HasFactory, SoftDeletes;

    public function news()
    {
        return $this->belongsToMany(News::class, 'news_hashtag_for_news', 'hashtag_id', 'news_id');
    }
}
