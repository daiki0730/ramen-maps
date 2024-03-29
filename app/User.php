<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends \Eloquent implements Authenticatable
{
    //
    use AuthenticableTrait;
    protected $fillable = ['name','email','email_varified_at','password'];

  public function post() {
    return $this->hasMany('App\Post');
  }

}
