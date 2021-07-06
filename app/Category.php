<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [
    'name','price', 'description','photo','parent_id', 'tag','validatedData'
    ];

    public function children(){
    return $this->hasMany('App\Category', 'parent_id');
  }
}
