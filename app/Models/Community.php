<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Community extends Model implements Auditable
{
  use HasFactory;
  use \Spatie\Translatable\HasTranslations;
  use \OwenIt\Auditing\Auditable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'facebook',
    'instagram',
    'youtube',
  ];    

  public $translatable = [
    'facebook',
    'instagram',
    'youtube',
  ];

}
