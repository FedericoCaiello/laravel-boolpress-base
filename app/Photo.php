<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $fillable = [
    'name',
    'img',
    'user_id'
  ];

  public function users()
  {
    return $this->belongsTo('App\User');
  }
}
