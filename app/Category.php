<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey = "categoryID";

    public function movies() {
      return $this->hasMany('App\Movie', 'category', 'categoryID');
    }
}
