<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Movie extends Model
{
    protected $primaryKey = "movieID";
    public $timestamps = false;

    public function cat() {
      return $this->belongsTo('App\Category', 'category', 'categoryID');
    }

    public static function getAllMovies() {
      $movies = Self::all();
      $result = [
        'movies' => $movies
      ];
      return $result;
    }


}
