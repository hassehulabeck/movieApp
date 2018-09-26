<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $primaryKey = "movieID";
    public $timestamps = false;

    public static function getAllMovies() {
      $movies = Self::all();
      $result = [
        'movies' => $movies
      ];
      return $result;
    }

}
