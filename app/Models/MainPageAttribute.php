<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainPageAttribute extends Model
{
  protected $table = 'main_page_attribute';
  protected $fillable = [
      'title',
      'description',
      'footer_email',
      'footer_address'
  ];

  public $timestamps = false;
}
