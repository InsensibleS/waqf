<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectComment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $timestamps = false;

    protected $casts = [
        'publication_date' => 'date'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function childrenComments()
    {
        return $this->hasMany(ProjectComment::class, 'answer_to', 'id');
    }

    public function parentComment()
    {
        return $this->belongsTo(ProjectComment::class, 'answer_to', 'id');
    }

    public function projectCommentLikes()
    {
        return $this->hasMany(ProjectCommentLike::class, 'project_comment_id', 'id');
    }

    public function projectCommentDislikes()
    {
        return $this->hasMany(ProjectCommentDislike::class, 'project_comment_id', 'id');
    }
}
