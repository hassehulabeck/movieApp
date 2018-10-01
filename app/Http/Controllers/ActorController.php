<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
    public function getAll() {
      $actors = Actor::getAll();
      return view('actorsByQuery', $actors);
    }
}
