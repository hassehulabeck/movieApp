<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Movie extends Model
{
    protected $primaryKey = "movieID";
    public $timestamps = false;
    protected $fillable = [
        'movieTitle', 'Year', 'category'
    ];

    public function cats() {
      return $this->belongsTo('App\Category', 'category', 'categoryID');
    }

    // Actors-kopplingen works like a charm.
    public function actors() {
      return $this->belongsToMany('App\Actor', 'actorsPerMovie', 'movie', 'actor');
    }

    public static function getAllMovies() {
      $movies = Self::all();
      $result = [
        'movies' => $movies
      ];
      return $result;
    }

    public static function mbq($first, $last) {
      $movies = DB::table('movies')
        ->whereBetween('Year', [$first, $last])
        ->orderBy('Year')
        ->get();
      $result = [
        'movies' => $movies
      ];
      return $result;
    }

    public static function insert($request) {
      $data = ['movieTitle' => 'Hets', 'Year' => 1944, 'category' => 3];
      $newID = DB::table('movies')
        ->insertGetId($data);
      return $newID;
    }
}
