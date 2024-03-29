<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title','body','image'];

  public function comments() {
    return $this->hasMany('App\Comment');
  }

  public function users() {
    return $this->belongsTo('App\User');
  }

}
