<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  use HasFactory,   SoftDeletes;
  protected $table = 'news';
  protected $fillable = [
      'title',
      'description',
      'image',
      'publication_date'
  ];

  protected $casts = [
        'publication_date' => 'datetime'
      ];
}
