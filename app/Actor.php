<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Actor extends Model
{
    public function movies() {
      return $this->belongsToMany('App\Movie', 'actorsPerMovie', 'actor', 'movie');
      //return $this->belongsToMany('App\Actor', 'actorsPerMovie', 'movie', 'actor');
    }

    public static function getAll() {
      $result = DB::table('actors')->get();
      $actors = [
        'actors' => $result
      ];
      return $actors;
    }
}
