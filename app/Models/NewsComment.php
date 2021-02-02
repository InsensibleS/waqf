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

    public function childrenComments()
    {
        return $this->hasMany(NewsComment::class, 'answer_to', 'id');
    }

    public function parentComment()
    {
        return $this->belongsTo(NewsComment::class, 'answer_to', 'id');
    }

    public function newsCommentLikes()
    {
        return $this->hasMany(NewsCommentLike::class, 'news_comments_id', 'id');
    }

    public function newsCommentDislikes()
    {
        return $this->hasMany(NewsCommentDislike::class, 'news_comments_id', 'id');
    }
}
