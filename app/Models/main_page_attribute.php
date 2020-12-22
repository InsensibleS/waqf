<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class main_page_attribute extends Model
{
  protected $table = 'main_page_attribute';
  protected $fillable = [
      'title',
      'description',
      'footer_email',
      'footer_adress'
  ];

  public $timestamps = false;
}
